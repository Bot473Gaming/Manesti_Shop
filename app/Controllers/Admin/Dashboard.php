<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Model_Admin;
use App\Models\Model_Orders;
use App\Models\Model_Products;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class Dashboard extends BaseController 
{
    public function __construct() {
        $this->Admin    = new Model_Admin();
        $this->Orders   = new Model_Orders();
        $this->Products = new Model_Products();
    }
    public function index() {
        $admin  = $this->Admin->getDataAdmin();
        $order  = $this->Orders->getAllOrders('status');
        // all, waiting, shipping, delivered, cancel
        $cntProduct = count($this->Products->getAllProducts());
        $orderinf = [
            'waiting'   => 0,
            'processed' => 0,
            'shipping'  => 0,
            'delivered' => 0,
            'cancel'    => 0,
        ];
        if (!$order) {
            $order = [];
        }
        // echo "<pre>";
        // print_r($order);die;
        foreach($order as $od) {
            $orderinf[$od->status]++;
        }
        $data   = [
            'title'     => 'Bảng điều khiển',
            'page'      => 'dashboard',
            'data'      => [
                'admin'     => $admin,
                'orderinf'  => $orderinf,
                'cntProduct'=> $cntProduct,
            ],
        ];


        return view('admin/layout', $data);
    }
}