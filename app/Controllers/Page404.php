<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Category;

class Page404 extends BaseController
{
    public function __construct() 
    {
        $this->Users = new Model_Users();
        $this->Category    = new Model_Category();
    }
    public function index()
    {
        $user = ((session()->get('isLoggdIn')))?$this->Users->getUser(['_id' => session()->get('user_id')])[0] : session()->get('cart');
        // data for layout
        if (isset($user->carts)) {
            $user->carts = json_decode($user->carts);
        } else {
            $user = (object)[
                'carts' => json_decode(session()->get('cart'))
            ];
        }
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        $data = [
            'title'     => "Manesti 404",
            'page'      => 'errors/html/error_404',
            'user'      => $user,
            'category'    => $category,
            'data'      => [
            ],
        ];
        return view('layout', $data);
    }
}
