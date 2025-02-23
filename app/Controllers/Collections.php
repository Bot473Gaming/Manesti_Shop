<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Products;
use App\Models\Model_Category;

class Collections extends BaseController {
    public function __construct() {
        $this->Users    = new Model_Users();
        $this->Products = new Model_Products();
        $this->Category = new Model_Category();
        $pager = \Config\Services::pager();
    }

    public function index($tag = 'all') {
        function getres(&$productss, $color, $size, $min, $max) {
            foreach ($productss as $key => &$pd) {
                if (count($color) > 0  && (count(array_intersect($color, $pd->color)) <= 0)) {
                    unset($productss[$key]);
                } elseif (count($size) > 0 && (count(array_intersect($size, $pd->size)) <= 0)) {
                    unset($productss[$key]);
                } elseif ($pd->price - ($pd->price * $pd->sale)/100< $min || $pd->price - ($pd->price * $pd->sale)/100 > $max) {
                    unset($productss[$key]);
                }
            }
        }
        function ft($list, $dk) {
            $arr = [];
            foreach($list as $li) {
                if ($li->tag == $dk) {
                    array_push($arr, $li);
                }
            }
            return $arr;
        }
        $page       = 1;
        $minPrice   = 0;
        $maxPrice   = 100000000;
        $color      = [];
        $size       = [];
        $isInStock  = null;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        if (isset($_GET['minPrice']) && $_GET['minPrice'] != '') {
            $minPrice = $_GET['minPrice'];
        }
        if (isset($_GET['maxPrice']) && $_GET['maxPrice']  != '') {
            $maxPrice = $_GET['maxPrice'];
        }
        if (isset($_GET['color'])) {
            $color = $_GET['color'];
        }
        if (isset($_GET['size'])) {
            $size = $_GET['size'];
        }
        if (isset($_GET['isInStock'])) {
            $isInStock = $_GET['isInStock'];
        }
        if (isset($_GET['sort_by'])) {
            $temp = explode('|', $_GET['sort_by']);
            $this->Products->sortProduct($temp[0], $temp[1]);
        }
        $products   = $this->Products->paginate(18);
        $category   = $this->Category->getCategorys();
        $category   = json_decode($category->value);
        $user       = ((session()->get('isLoggdIn')))?$this->Users->getUser(['_id' => session()->get('user_id')])[0] : session()->get('cart');
        if (isset($user->carts)) {
            $user->carts = json_decode($user->carts);
        } else {
            $user = (object)[
                'carts' => json_decode(session()->get('cart')),
            ];
        }
        $notok = false;
        if (!$products) {
            $products = [];
            $notok = true;
        }
        foreach ($products as &$pd) {
            $pd->types = json_decode($pd->types);
            $pd->color = json_decode($pd->color, true);
            $pd->size  = json_decode($pd->size, true);
        }
        if ($tag != 'all') {
            $rules = [];
            $ix = -2;
            $bcs = '';
            foreach($category as $index=>$tags) {
                array_push($rules, $tags->slug);
                if ($tag == $tags->slug) {
                    $ix = $index;
                    $bcs = $tags->name;
                }
            }
            if (in_array($tag, $rules)) {
                $products = ft($products, $ix);
            } else {
                return redirect()->to('collections/all');
            }
        }
        getres($products, $color, $size, $minPrice, $maxPrice);
        $bc = [
            (object) [
                'name'  => (isset($bcs))?$bcs:'Tất cả sản phẩm',
                'url'   =>'',
            ],  
        ];
        $data = [
            'title'         => (isset($bcs))?"$bcs":"Sản phẩm",
            'page'          => 'collection',
            'breadcrumbs'   => $bc,
            'user'          => $user,
            'category'    => $category,
            'data'          => [
                'products'          => $products,
                'category'          => $category,
                'colors'            => $color,
                'size'              => $size,  
                'pager'             => $this->Products->pager,
                'minPrice'          => $minPrice,
                'maxPrice'          => $maxPrice,
                'notok'             => $notok,
            ],
        ];
        
        // echo "<pre>";
            // print_r($data);
            // print_r($color,);
            // print_r($_GET);
        return view('layout', $data);
    }

}