<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Products;
use App\Models\Model_Orders;
use CodeIgniter\Session\Session;
use CodeIgniter\I18n\Time;

class CheckOut extends BaseController
{
    public function __construct()
    {
        $this->Users    = new Model_Users();
        $this->Products = new Model_Products();
        $this->Orders   = new Model_Orders();
    }
    public function genner()
    {
        function generateRandomString($length = 50)
        {
            return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
        }
        function checkcolor($cl, $products)
        {
            foreach ($products as $index => $pd) {
                if (isset($pd->cl) && $pd->cl == $cl) {
                    return $index;
                }
            }
            return -1;
        }
        $ky = generateRandomString();
        // session()->set(['tokenCheckout' => $ky]);
        session()->setFlashdata('tokenCheckout', $ky);//
        if (isset($_GET['id'])) {
            $product = $this->Products->getProduct(['_id' => $_GET['id']])[0];
            $product->classify = json_decode($product->classify, true);
            $product->types = json_decode($product->types);
            $image = $product->types[0]->image;
            $ok = checkcolor($_GET['color'], $product->types);
            if ($ok >= 0) {
                $image = $product->types[$ok]->image;
            }
            $data = array((object)[
                'id'    => $product->_id,
                'slug'  => $product->slug,
                'sku'   => $product->classify[$_GET['size']][$_GET['color']]['sku'],
                'image' => $image,
                'name'  => $product->name,
                'color' => $_GET['color'],
                'size'  => $_GET['size'],
                'price' => $product->sale_price,
                'qty'   => $_GET['qty'],    
            ]);
            // session()->set(['buy-now' => $data]);
            session()->setFlashdata('buy-now', $data);//
        } else {
            return redirect()->to("/checkout/$ky");
        }
        echo $ky;
    }
    public function index($key = null)
    {
        if ($key != session()->getFlashdata('tokenCheckout')) {
            return redirect()->to("/cart");
        }
        session()->setFlashdata('tokenCheckout', $key);
        if ((!! session()->getFlashdata('buy-now') && session()->getFlashdata('buy-now') != '')) {
            $order = session()->getFlashdata('buy-now');
            $user = (session()->get('isLoggdIn'))?$this->Users->getUser(['_id' => session()->get('user_id')])[0]:'';
            session()->setFlashdata('buy-now', $order);
        } else {
            if (session()->get('isLoggdIn')) {
                $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
                $user->carts = json_decode($user->carts);
                $order = $user->carts;
            } else {
                $user = (object)[
                    'carts' => json_decode(session()->get('cart')),
                ];
                $order = $user->carts;
            }
        }
        if (!$order) {
            $order =  [];
            session()->set(['cart' => '[]']);
        }

        $data = [
            'user'      => $user,
            'orders'   => $order,
        ];
        // echo "<pre>";
        // print_r($data);
        if (count($data['orders']) === 0) {
            session()->setFlashdata('tokenCheckout', '');//;
            return redirect()->to("/cart");
        }
        return view('Checkout/info', $data);
    }
    public function success($tk = null)
    {
        if ($tk != session()->getFlashdata('tokenCheckout')) {
            return redirect()->to("/cart");
        }
        if ((!!session()->getFlashdata('buy-now')) && session()->getFlashdata('buy-now') != '') {
            $pd = session()->getFlashdata('buy-now');
            
        } else {
            if (session()->get('isLoggdIn')) {
                $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
                $pd = json_decode($user->carts);
            } else {
                $user = (object)[
                    'carts' => json_decode(session()->get('cart'))
                ];
                $pd = $user->carts;
            }
        }
        $time = Time::now('Asia/Ho_Chi_Minh', 'vi_VN');
        $order = [
            'user_id'           => (session()->get('isLoggdIn'))?session()->get('user_id'):-1,
            'customer_name'     => $_POST['customer_name'],
            'customer_email'    => $_POST['customer_email'],
            'customer_phone'    => $_POST['customer_phone'],
            'customer_address'  => $_POST['customer_address_detail'] . ', ' . $_POST['customer_ward'] . ', ' . $_POST['customer_district'] . ', ' . $_POST['customer_province'],
            'pds'               => json_encode($pd),
            'grossAmount'       => $_POST['grossAmount'],
            'status'            => 'waiting',
            'time_update'       => '['.json_encode([
                    'title' => 'Đơn hàng đã được tạo',
                    'timeAt'=> $time->toDateTimeString(), 
                ]).']',
        ];
        
        $ID = $this->Orders->createOrder($order);
        $ID = '#'.str_pad($ID, 6, '0', STR_PAD_LEFT);
        $data = [
            'ID'        => $ID,
            'resOrder'  => $order,
            'orders'    => $pd,
        ];
        // echo "<pre>";
        // print_r($ID);die;

        if ((!session()->get('buy-now')) && session()->get('buy-now') == '') {
            if (session()->get('isLoggdIn')) {
                $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
                $defAddress = (object) [
                    'name'      => $_POST['customer_name'],
                    'province'  => $_POST['province'],
                    'district'  => $_POST['district'],
                    'ward'      => $_POST['ward'],
                    'detail'    => $_POST['customer_address_detail'],
                ];
                $defphone = $_POST['customer_phone'];
                $user->carts = json_encode([]);
                $user->defaultAddress   = json_encode($defAddress);
                $user->defaultPhone     = $defphone;
                $this->Users->updateUser(json_decode(json_encode($user), true), $user->_id);
            } else {
                session()->set(['cart' => '[]']);
            }
        } else {
            if (session()->get('isLoggdIn')) {
                $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
                $defAddress = (object) [
                    'name'      => $_POST['customer_name'],
                    'province'  => $_POST['province'],
                    'district'  => $_POST['district'],
                    'ward'      => $_POST['ward'],
                    'detail'    => $_POST['customer_address_detail'],
                ];
                $defphone = $_POST['customer_phone'];
                $user->defaultAddress   = json_encode($defAddress);
                $user->defaultPhone     = $defphone;
                $this->Users->updateUser(json_decode(json_encode($user), true), $user->_id);
            }
            session()->setFlashdata('buy-now', '');
        }
        
        echo view('Checkout/success', $data);
        // session()->set(['tokenCheckout' => '']);
    }
}
