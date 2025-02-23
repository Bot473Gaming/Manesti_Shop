<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Products;
use App\Models\Model_Banners;
use App\Models\Model_SubBanners;
use App\Models\Model_Category;

class Home extends BaseController
{
    public function __construct() 
    {
        $this->Users        = new Model_Users();
        $this->Products     = new Model_Products();
        $this->Banners      = new Model_Banners();
        $this->SubBanners   = new Model_SubBanners();
        $this->Category     = new Model_Category();
    }
    public function index()
    {
        $this->Products->sortProduct('_id', 'DESC');
        $productsNew  = $this->Products->getAllProducts(20);
        $this->Products->sortProduct('sold', 'DESC');
        $productsBest = $this->Products->getAllProducts(20);
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        
        $banners      = $this->Banners->getAllBanners();
        $subbanner     = $this->SubBanners->getAllSubBanners();
        if (!$banner) {
            $banner = array(
                (object) [
                    'image' => '',
                    ]    
            );
        }
        // data for layout
        foreach ($productsNew as &$pd) {
            $pd->types = json_decode($pd->types);
            $pd->color = json_decode($pd->color);
            $pd->size = json_decode($pd->size);
        }
        foreach ($productsBest as &$pd) {
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
        $data = [
            'title'     => "",
            'page'      => 'homepage',
            'user'      => $user,
            'category'      => $category,
            'data'      => [
                'productsNew'   => $productsNew,
                'productsBest'  => $productsBest,
                'banners'       => $banners,
                'subbanner'     => $subbanner,
                
            ],
        ];
        // echo "<pre>";
        // print_r($category);
        // echo '</br>';
        // print_r($productsBest);
        return view('layout', $data);
    }
}
