<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_Products;
use App\Models\Model_Category;

class Products extends BaseController
{
    public function __construct()
    {
        $this->Products     = new Model_Products();
        $this->Category    = new Model_Category();
    }
    public function index()
    {
        $products   = $this->Products->getAllProducts();
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        if (!$products) {
            $products = [];
        }
        $data   = [
            'title'     => 'Sản phẩm',
            'page'      => 'products',
            'data'      => [
                'products' => $products,
                'category' => $category,
            ],
        ];
        return view('admin/layout', $data);
    }
    public function detail($id = null)
    {
        $product = $this->Products->getProduct(['_id' => $id]);
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        $new = false;
        if (!($product)) {
            if ($id != 'new') {
                return redirect()->to('/admin/products');
            }
            $new = true;
            $product = (object) [
                'code'       => 0,
                'name'      => '',
                'price'     => 0,
                'sale'      => 0,
                'sale_price'=> 0,
                'types'     => '[]',
                'colorMode' => 0,
                'color'     => '[]',
                'size'      => '[]',
                'classify'  =>  '{}',
                'description'=>'',
                'sub_desc'  => '',
                'desc_detail'=>'[]',
                'size_chart'=> '',
                'sold'      => 0,
                // 'qty'       => 100,
                'tag'       => -1,
            ];
        } else {
            $product = $product[0];
        }
        
        $product->types = json_decode($product->types);
        $product->color = json_decode($product->color);
        $product->size = json_decode($product->size);   
        $product->classify = json_decode($product->classify, true);
        if($id == null) {
            return redirect()->to('/admin/products');
        }
        $data   = [
            'title'     => (!!$product->name)?$product->name:'Thêm sản phẩm mới',
            'page'      => 'productDetail',
            'data'      => [
                'product' => $product,
                'category'=> $category,
                'new'     => $new,
            ],
        ];

        // echo "<pre>";
        // print_r($data);
        return view('admin/layout', $data);
    }
    public function update($id)
    {
        $product = $this->Products->getProduct(['_id' => $id]);
        $new = false;
        if (!($product)) {
            $new = true;
            $product = (object) [
                'code'       => 0,
                'name'      => '',
                'slug'      => '',
                'price'     => 0,
                'sale'      => 0,
                'sale_price'=> 0,
                'types'     => '[]',
                'colorMode' => 0,
                'color'     => '[]',
                'size'      => '[]',
                'classify'  =>  '{}',
                'description'=>'',
                'sub_desc'  => '',
                'desc_detail'=>'[]',
                'size_chart'=> '',
                'sold'      => 0,
                'qty'       => 100,
                'tag'       => -1,
            ];
        } else {
            $product = $product[0];
        }
        

        $product->types = json_decode($product->types);
        $ok_img = json_decode($_POST['ok-img'], true);
        $code    = $_POST['code'];
        $name   = $_POST['name'];
        $tag    = $_POST['tag'];
        $slug   = $_POST['slug'];
        $price  = $_POST['price'];
        $sale   = $_POST['sale'];
        $sale_price= $_POST['sale_price'];
        // $qty    = $_POST['qty'];
        $colorMode  = $_POST['colorMode'];
        $color  = $_POST['color'];
        $size   = $_POST['size'];
        $classify= $_POST['classify'];
        $desc   = $_POST['description'];
        $sub_desc = $_POST['sub_desc'];
        $desc_detail= $_POST['desc_detail'];
        $size_chart   = $_POST['size_chart'];
        $link   = json_decode($_POST['link']);
        $imgs   = Json_decode($_POST['imgs']);
        
        $product->name  = $name;
        $product->tag   = $tag;
        $product->slug  = $slug;
        $product->code   = $code;
        $product->price = $price;
        $product->sale  = $sale;
        $product->sale_price  = $sale_price;
        // $product->qty   = $qty;
        $product->colorMode = $colorMode;
        $product->color = $color;
        $product->size  = $size;
        $product->classify  = $classify;
        $product->description = $desc;
        $product->sub_desc = $sub_desc;
        $product->desc_detail = $desc_detail;
        $product->size_chart = $size_chart;
        $dl = [];
        $len = count($product->types);
        for($i = $len;$i<12;$i++) {
            array_push($product->types, (object)['cl' => null, 'image' => null]);
        }
        $config['max_size'] = '1000000000';
        $imagefile = $this->request->getFiles();
        // die;
        foreach ($imagefile as $key => $img) {
            if ($img->isValid() && !$img->hasMoved()) {
                // echo "ok ";
                $newName = $img->getRandomName();
                $img->move(FCPATH . 'public/image/', $newName);
                $k = explode('-', $key);
                if (isset($product->types[$k[1]])) {
                    $product->types[$k[1]] = (object)['cl' => null, 'image' => $newName];
                }
            }
        }
        foreach($imgs as $index=>$img) {
            if ($product->types[$index]->image != $img && !!$img) {
                $product->types[$index]->image = $img;
            }
        }
        foreach($link as $li) {
            $tm = explode('-', $li);
            if (isset($product->types[$tm[0]])){
                $product->types[$tm[0]]->cl = $tm[1];

            }
        }
        $pdx = [];
        foreach($product->types as $i=>$pd) {
            if ($pd->image != null && $ok_img[$i]) {
                array_push($pdx, $pd);
            }
        }
        $product->types = json_encode($pdx);
        if(!$new) {
            // print_r($product);
            $this->Products->updateProduct(json_decode(json_encode($product), true), $id);
        } else {
            $this->Products->createProduct(json_decode(json_encode($product), true));
            // return redirect()->to('/admin/products');
        }
        // print_r($product->types);
        
    }
    public function delete()
    {
        $del = $_POST['pd_id'];
        // print_r($del);
        $del = json_decode($del);
        foreach($del as $id) {
            $this->Products->deleteProduct($id);
        }
    }
}
