<?php

namespace App\Controllers;
use App\Models\Model_Users;
use App\Models\Model_Redirect;
use App\Models\Model_Category;

class Redirect extends BaseController
{
    public function __construct()
    {
        $this->Users        = new Model_Users();
        $this->Redirect     = new Model_Redirect();
        $this->Category     = new Model_Category();
    }
    public function index($url)
    {
        function find($array,$url){
            foreach ($array as $element ) {
                if ( $url == $element->url ) {
                    return $element;
                }
            }
            return false;
        }
        $redirect = $this->Redirect->getRedirect();
        $redirect = json_decode($redirect->val);
        $redirect = find($redirect, $url);
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        if (session()->get('isLoggdIn')) {
            $user = $this->Users->getUser(['_id' => session()->get('user_id')])[0];
            $user->carts = json_decode($user->carts);
        } else {
            $user = (object)[
                'carts' => json_decode(session()->get('cart')),
            ];
        }
        $bc = [
            (object) [
                'name'  => 'Chuyển hướng',
                'url'   =>'',
            ],  
        ];
        $data = [
        'title'     => "Chuyển hướng",
        'page'      => 'redirect',
        'breadcrumbs'=>$bc,
        'user'      => $user,
        'category'      => $category,
        'data'      => [
            'redirect'     => $redirect,
            
            ],
        ];
        return view('layout',$data);
        // return redirect()->to('https://zalo.me/g/nxwqje848');
    }
}