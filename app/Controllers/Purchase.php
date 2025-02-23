<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Orders;
use App\Models\Model_Category;
use CodeIgniter\I18n\Time;

class Purchase extends BaseController
{
    public function __construct() 
    {
        $this->Users        = new Model_Users();
        $this->Orders        = new Model_Orders();
        $this->Category     = new Model_Category();
    }
    public function index()
    {
        function filter($arr, $k) {
            $res = [];
            foreach($arr as $ar) {
                if ($ar->status == $k) {
                    array_push($res, $ar);
                }
            }
            return $res;
        }
        
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        
        $user  = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
        $this->Orders->sortOrder('_id', 'DESC');
        $order = $this->Orders->getOrder(['user_id' => $user->_id]); 
        
        $user->carts = json_decode($user->carts);
        $orderCounter = [
            'waiting'   => 0,
            'processed' => 0,
            'shipping'  => 0,
            'delivered' => 0,
            'cancel'    => 0,
        ];
        if (!!$order) {
            foreach($order as $od) {
                $orderCounter[$od->status]++;
            }
        } else {
            $order = [];
        }
        if (isset($_GET['type']) && $_GET['type'] != 'all') {
            $rules  = ['all','waiting', 'processed', 'shipping', 'delivered', 'cancel'];
            $type   = $_GET['type'];
            if (in_array($type, $rules)) {
                $order = filter($order, $type);
            } else {
                return redirect()->back();
            }
        }
        $bc = [
            (object) [
                'name'  => "Đơn mua",
                'url'   =>'',
            ],  
        ];
        $data = [
            'title'     => "Đơn mua",
            'page'      => 'Purchase/purchase',
            'breadcrumbs'   => $bc,
            'user'      => $user,
            'category'      => $category,
            'data'      => [
                'orders'    => $order,
                'cntOrder'  => $orderCounter,
            ],
        ];
        // echo "<pre>";
        // print_r($order);
        return view('layout', $data);
    }
    public function detail($id = null) {
        if ($id == null) {
            return redirect()->back();
        }
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        
        $user  = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
        $user->carts = json_decode($user->carts);
        $order = $this->Orders->getOrder(['_id' => $id]);
        if ($order) {
            $order = $order[0];
            $order->time_update = json_decode($order->time_update);
            if ($order->user_id != $user->_id) {
                $order = false;
            }
        } else {
            $order = false;
        }
        $bc = [
            (object) [
                'name'  => "Đơn mua",
                'url'   =>'',
            ],  
        ];
        $data = [
            'title'     => "Đơn mua",
            'page'      => 'Purchase/purchaseDetail',
            'breadcrumbs'   => $bc,
            'user'      => $user,
            'category'      => $category,
            'data'      => [
                'order' => $order,
            ],
        ];
        return view('layout', $data);
    }
    public function handel() {
        $user       = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
        $order_id   = $_POST['order_id'];
        $act        = $_POST['act'];
        if ($order = $this->Orders->getOrder(['_id' => $order_id])) {
            $order = $order[0];
            if ($order->user_id != $user->_id) {
                return false;
            }
        } else {
            return false;
        }
        switch ($act) {
            case 'update':
                $odNew = (object)[
                    'customer_name'     => $_POST['customer_name'],
                    'customer_email'    => $_POST['customer_email'],
                    'customer_phone'    => $_POST['customer_phone'],
                    'customer_address'  => $_POST['customer_address_detail'] . ', ' . $_POST['customer_ward'] . ', ' . $_POST['customer_district'] . ', ' . $_POST['customer_province'],
                ];
                $order->customer_name   = $odNew->customer_name;
                $order->customer_email  = $odNew->customer_email;
                $order->customer_phone  = $odNew->customer_phone;
                $order->customer_address= $odNew->customer_address;
                break;
            case 'cancel':
                if ($order->status != 'waiting') {
                    return;
                }
                $order->status = 'cancel';
                $order->time_update = json_decode($order->time_update);
                $time = Time::now('Asia/Ho_Chi_Minh', 'vi_VN');
                array_unshift($order->time_update, (object)['title' => 'Đơn hàng đã bị hủy', 'timeAt' => $time->toDateTimeString()]);
                $order->time_update = json_encode($order->time_update);
                break;
        }
        $this->Orders->updateOrder(json_decode(json_encode($order), true), $order_id);
    }
}