<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Products;
use App\Models\Model_Category;

class Search extends BaseController
{
    public function __construct() {
        $this->Users    = new Model_Users();
        $this->Products = new Model_Products();
        $this->Category    = new Model_Category();
    }
    public function index()
    {
        $key = $_GET['q'];
        // $sr = ['name' => $key, 'sku' => $key, 'description' => $key];
        $this->Products->searchProduct('name', $key);
        $product = $this->Products->getAllProducts();
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        $user = ((session()->get('isLoggdIn')))?$this->Users->getUser(['_id' => session()->get('user_id')])[0] : session()->get('cart');
        $notok = false;
        if (!$product) {
            $product = [];
            $notok = false;
        }
        foreach ($product as &$pd) {
            $pd->types = json_decode($pd->types);
            $pd->color = json_decode($pd->color);
            $pd->size = json_decode($pd->size);
        }
        if (isset($user->carts)) {
            $user->carts = json_decode($user->carts);
        } else {
            $user = (object)[
                'carts' => json_decode(session()->get('cart'))
            ];
        }
        $bc = [
            (object) [
                'name'  => "Tìm kiếm: $key",
                'url'   =>'',
            ],  
        ];
        $data = [
            'title'         => "Tìm kiếm: $key",
            'page'          => 'search',
            'breadcrumbs'   => $bc,
            'user'      => $user,
            'category'    => $category,
            'data'      => [
                'product'   => $product,
                'keywords'  => $key,
                'notok'     => $notok,
            ],
        ];
        // echo "<pre>";
        // print_r($product);
        return view('layout', $data);
    }
}