<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Products;
use App\Models\Model_Category;

class Cart extends BaseController 
{
    public function __construct() 
    {
        $this->Users    = new Model_Users();
        $this->Products = new Model_Products();
        $this->Category    = new Model_Category();
    }
    // value a include array object b with key _id
    public function index()
    {
        function includes($a, $b) {
            foreach($b as $val) { 
                if ($val->id == $a) {
                    return true;
                }
            }
            return false;
        }
        if (session()->get('isLoggdIn')) {
            $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
            $user->carts = json_decode($user->carts);
            $products = $user->carts;
        } else {
            $user = (object)[
                'carts' => json_decode(session()->get('cart')),
            ];
            $products = $user->carts;
        }
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        $bc = [
            (object) [
                'name'  => 'Giỏ hàng của bạn',
                'url'   =>'',
            ],  
        ];
        $data = [
            'title'     => 'Giỏ hàng',
            'page'      => 'cart',
            'breadcrumbs'=>$bc,
            'user'      => $user,
            'category'    => $category,
            'data'      => [
                'products' => $products,
                // 'review'  => $review
            ],
        ];
        // echo "<pre>";
        // print_r($data);
        return view('layout', $data);
    }
    public function clearCart() {
        if (session()->get('isLoggdIn')) {
        $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
        $user->carts = '[]';
        $this->Users->updateUser(json_decode(json_encode($user), true), $user->_id);
            
        } else {
            session()->set(['cart' => json_encode([])]);
        }
        
        // echo "<pre>";
        // print_r($user);
        return redirect()->to('/cart');
    }
    public function deleteCart(){
        $line = $_GET['line'];
        if (session()->get('isLoggdIn')) {
        $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
        $user->carts = json_decode($user->carts);
        array_splice($user->carts, $line, 1);
        $user->carts = json_encode($user->carts);
        $this->Users->updateUser(json_decode(json_encode($user), true), $user->_id);
        print_r($user->carts);
        } else {
            $cart = session()->get('cart');
            $cart = json_decode($cart, true);
            array_splice($cart, $line, 1);
            $cart = json_encode($cart);
            echo $cart;
            session()->set(['cart' => $cart]);
            
        }
        // print_r($user);
        // return redirect()->back();
    }
    public function updateCart() {
        if (session()->get('isLoggdIn')) {
            $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
            $user->carts = json_decode($user->carts);
            $i=0;
            foreach ($user->carts as &$product) {
                $product->qty = $_POST['qty'][$i++];
            }
            $user->carts = json_encode($user->carts);
            $this->Users->updateUser(json_decode(json_encode($user), true), $user->_id);
        } else {
            $cart = session()->get('cart');
            $cart = json_decode($cart);
            foreach($cart as $i=>&$pd) {
                $pd->qty = $_POST['qty'][$i];
            } 
            
            session()->set(['cart' => json_encode($cart)]);
        }
        
        // print_r($user);
        
        return redirect()->to('/cart');
    }

}