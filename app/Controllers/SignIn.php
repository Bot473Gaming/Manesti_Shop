<?php

namespace App\Controllers;

use App\Models\Model_Users;
use App\Models\Model_Category;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class SignIn extends BaseController 
{
    public function __construct() {
        $this->Users = new Model_Users();
        $this->Category    = new Model_Category();
    }
    public function index() {
        // $user = $this->Users->getUser(['_id' => 1]);
        
        // $user->carts = json_decode($user->carts, true);
        // echo "<pre>";
        // print_r(($user));
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        if (session()->get('isLoggdIn')) {
            return redirect()->to('/');
        }
        helper(['form']);
        $bc = [
            (object) [
                'name'  => 'Tài khoản',
                'url'   =>'',
            ],  
        ];
        $data = [
            'title'     => 'Đăng nhập',
            'page'      => 'Auth/SignIn',
            'breadcrumbs'=> $bc,
            'user'      => false,
            'category'    => $category,
            'data'      => [
            ],
        ];
        return view('layout', $data);
    }

    public function loginAuth() {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $this->Users->getUser(['email' => $email]);

        if ($data) {
            $data = $data[0];
            $pass = $data->password;
            $hash_password = password_verify($password, $pass);
            if ($hash_password) {
                $ses_data = [
                    'user_id' => $data->_id,
                    'fullname' => $data->fullName,
                    'email' => $data->email,
                    'isLoggdIn' => True,
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Email/Mật khẩu không đúng');
                return redirect()->to('account/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email/Mật khẩu không đúng');
            return redirect()->to('account/signin');
        }
    }
}