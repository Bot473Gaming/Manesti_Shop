<?php

namespace App\Controllers;

use App\Models\Model_Products;
use App\Models\Model_Review;
use App\Models\Model_Users;
use App\Models\Model_Category;
// use App\Models\Model_Orders;
class Products extends BaseController
{
    public function __construct()
    {
        $this->Products = new Model_Products();
        $this->Users    = new Model_Users();
        $this->Category    = new Model_Category();
        // $this->Orders   = new Model_Orders();
    }
    public function index($id)
    {
        $product  = $this->Products->getProduct(['_id' => $id]);
        if ($product) {
            $product = $product[0];
            if ($product->types == null) {
                $product->types = '[]';
            }
            if ($product->color == null) {
                $product->color = '[]';
            }
            if ($product->size == null) {
                $product->size = '[]';
            }
            $product->types = json_decode($product->types);
            $product->color = json_decode($product->color);
            $product->size = json_decode($product->size);
            // $product->description = explode("\n", $product->description);
            
        } else {
            return redirect()->to('/');
        }
        
        if ($product->tag == -1) {
            $this->Products->sortProduct('_id', 'ASC', true);
            $productsOld  = $this->Products->getAllProducts();
        } else {
            $productsOld  = $this->Products->getProduct(['tag' => $product->tag]);
        }
        $this->Products->sortProduct('sold', 'DESC', true);
        $productsBest = $this->Products->getAllProducts(15);
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        foreach ($productsOld as &$pd) {
            if ($pd->types == null) {
                $pd->types = '[]';
            }
            if ($pd->color == null) {
                $pd->color = '[]';
            }
            if ($pd->size == null) {
                $pd->size = '[]';
            }
            $pd->types = json_decode($pd->types);
            $pd->color = json_decode($pd->color);
            $pd->size = json_decode($pd->size);
        }
        foreach ($productsBest as &$pd) {
            if ($pd->types == null) {
                $pd->types = '[]';
            }
            if ($pd->color == null) {
                $pd->color = '[]';
            }
            if ($pd->size == null) {
                $pd->size = '[]';
            }
            $pd->types = json_decode($pd->types);
            $pd->color = json_decode($pd->color);
            $pd->size = json_decode($pd->size);
        }
        
        if (session()->get('isLoggdIn')) {
            $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
            $user->carts = json_decode($user->carts);
        } else {
            $user = (object)[
                'carts' => json_decode(session()->get('cart')),
            ];
        }
        // [(object)['name' => $categpry[$product->tag]->name, 'url']].'|'.$product->name
        $bc = [
            (object) [
                'name'  => $product->name,
                'url'   =>'',
            ],  
        ];
        if (isset($category[$product->tag])) {
            array_unshift($bc, (object) [
                'name'  => $category[$product->tag]->name,
                'url'   =>'/collections/'.$category[$product->tag]->slug,
            ]);
        }
        
        $data = [
            'title'         => $product->name,
            'page'          => 'product',
            'breadcrumbs'   => $bc,
            'user'          => $user,
            'category'    => $category,
            'data'      => [
                'product' => $product,
                'productsOld'   => $productsOld,
                'productsBest'  => $productsBest,
                // 'review'  => $review
            ],
        ];
        // echo "<pre>";
        // print_r($bc);
       
        return view('layout', $data);
    }
    public function addToCart($_id)
    {
        function checkSame($arr, $brr) {
            foreach ($arr as $index=>$ar) {
                if ($ar['color'] == $brr['color'] && $ar['size'] == $brr['size'] && $ar['id'] == $brr['id']) {
                    return $index;
                }        
            }
            return -1;
        }
        function checkcolor($cl, $products) {
            foreach ($products as $index => $pd) {
                if (isset($pd->cl) && $pd->cl == $cl) {
                    return $index;
                }
            }
            return -1;
        }
        $product = $this->Products->getProduct(['_id' => $_id])[0];
        if (!isset($_POST['color'])) {
            $_POST['color'] = null;
        }
        if (!isset($_POST['size'])) {
            $_POST['size'] = null;
        }
        if ($product->types == null) {
            $product->types = '[]';
        }
        $product->types = json_decode($product->types);
        $product->classify = json_decode($product->classify, true);
        $image = $product->types[0]->image;
        $ok = checkcolor($_POST['color'], $product->types);
        if ($ok >= 0) {
            $image = $product->types[$ok]->image;
        }
        $data = [
            'id'    => $product->_id,
            'slug'  => $product->slug,
            'sku'   => $product->classify[$_POST['size']][$_POST['color']]['sku'],
            'image' => $image,
            'name'  => $product->name,
            'color' => $_POST['color'],
            'size'  => $_POST['size'],
            'price' => $product->sale_price,
            'qty'   => $_POST['qty'],
        ];
        
        if (session()->get('isLoggdIn')){
            $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
            if ($user->carts == null) {
                $user->carts = '[]';
            }
            $user->carts = json_decode($user->carts, true);
            $ok = checkSame($user->carts, $data);
            if ($ok >= 0) {
                $user->carts[$ok]['qty'] += $data['qty'];
            }else {
                array_push($user->carts, $data);
            }
            $user->carts = json_encode($user->carts);
            echo $user->carts;
            $this->Users->updateUser(json_decode(json_encode($user), true), $user->_id);
        } else {
            
            $cart = session()->get('cart');
            if (!$cart) {
                $cart = '[]';
            }
            $cart = json_decode($cart, true);
            
            $ok = checkSame($cart, $data);
            if ($ok >= 0) {
                $cart[$ok]['qty'] += $data['qty'];
            } else {
                array_push($cart, $data);
            }
            $cart = json_encode($cart);
            echo $cart;
            session()->set(['cart' => $cart]);
        }
        
        // return redirect()->back();
    }
    public function writeAReview($_id)
    {
        helper(['form']);
        $data = [
            'authorName'      => $this->request->getVar('name'),
            'email'           => $this->request->getVar('email'),
            'rating'          => $this->request->getVar('rating'),
            'decsription'     => $this->request->getVar('decsription'),
            'userId'          => $_SESSION['_id'],
        ];
        $this->Review->createReview($data);
        return redirect()->back();
    }
}
