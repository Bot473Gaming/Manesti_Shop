<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_Admin;
use App\Models\Model_Orders;
use App\Models\Model_Products;
use CodeIgniter\I18n\Time;

class Table extends BaseController
{
    public function __construct()
    {
        $this->Orders   = new Model_Orders();
        $this->Admin    = new Model_Admin();
        $this->Products = new Model_Products();
    }
    public function index() 
    {
        // all, waiting, shipping, delivered, cancel
        $rules = ['waiting', 'processed', 'shipping', 'delivered', 'cancel'];
        $tab = 'all';
        if (isset($_GET['tb']) && $_GET['tb'] != '' && in_array($_GET['tb'], $rules)) {
            $tab = $_GET['tb'];
        }
        if ($tab != 'all') {
            $orders = $this->Orders->getOrder(['status' => $tab]);
        } else {
            $orders = $this->Orders->getAllOrders();
        }
        if (!isset($orders[0])) {
            $orders = [];
        }
        $data   = [
            'title'     => 'Đơn hàng',
            'page'      => 'table',
            'data'      => [
                'orders'    => $orders,
                'tab'       => $tab,    
            ],
        ];
        // echo "<pre>";
        // print_r();
        return view('admin/layout', $data);
    }
    public function handle() 
    {
        $st_vi = ['Đơn hàng đã được tạo','Người bán đang chuẩn bị đơn hàng', 'Người bán đã giao cho đơn vị vận chuyển','Giao hàng thành công', 'Đơn hàng đã bị hủy'];
        $step = ['waiting', 'processed', 'shipping', 'delivered', 'cancel'];
        $arr = ['waiting'=>0, 'processed'=>1, 'shipping'=>2, 'delivered'=>3, 'cancel'=>4];

        $act        = $_POST['act'];
        $orders_id  = $_POST['orders_id'];
        $orders_id = json_decode($orders_id);
        switch ($act) {
            case 'nextStep':
                foreach ($orders_id as $id) {
                    $order = $this->Orders->getOrder(['_id' => $id])[0];
                    if ($arr[$order->status] >= 0 && $arr[$order->status] <=2) {
                        $order->status = $step[$arr[$order->status] + 1];
                        $order->time_update = json_decode($order->time_update);
                        $time = Time::now('Asia/Ho_Chi_Minh', 'vi_VN');
                        array_unshift($order->time_update, (object)['title' => $st_vi[$arr[$order->status]], 'timeAt' => $time->toDateTimeString()]);
                        $order->time_update = json_encode($order->time_update);
                        if ($order->status == 'delivered') {
                            $admin  = $this->Admin->getDataAdmin();
                            $admin->earningsMonthly=$admin->earningsMonthly+$order->grossAmount;
                            $admin->earningsAnnual=$admin->earningsAnnual+$order->grossAmount;
                            $admin->sales++;
                            $this->Admin->updateDataAdmin(json_decode(json_encode($admin), true));
                            foreach(json_decode($order->pds) as $pd) {
                                $pds = $this->Products->getProduct(['_id' => $pd->id])[0];
                                $pds->sold  += $pd->qty;
                                $pds->classify = json_decode($pds->classify, true);
                                $pds->classify[$pd->size][$pd->color]['qty'] -= $pd->qty;
                                $pds->classify = json_encode($pds->classify);
                                $this->Products->updateProduct(json_decode(json_encode($pds), true), $pd->id);
                            }
                        }
                        $this->Orders->updateOrder(json_decode(json_encode($order), true), $id);
                    }
                }
                break;
            case 'cancel':
                foreach ($orders_id as $id) {
                    $order = $this->Orders->getOrder(['_id' => $id])[0];
                    if ($arr[$order->status] >= 0 && $arr[$order->status] <=2) {
                        $order->status = $step[4];
                        $order->time_update = json_decode($order->time_update);
                        $time = Time::now('Asia/Ho_Chi_Minh', 'vi_VN');
                        array_unshift($order->time_update, (object)['title' => $st_vi[$arr[$order->status]], 'timeAt' => $time->toDateTimeString()]);
                        $order->time_update = json_encode($order->time_update);
                        $this->Orders->updateOrder(json_decode(json_encode($order), true), $id);
                    }
                }
                break;
            case 'delete':
                foreach ($orders_id as $id) {
                    $this->Orders->deleteOrder($id);
                }
                break;
        }
        
    }
}