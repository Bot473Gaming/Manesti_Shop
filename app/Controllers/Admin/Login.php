<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Model_Users;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class Login extends BaseController 
{
    public function __construct() {
        $this->Users = new Model_Users();
    }
    public function index() {
        // $user = $this->Users->getUser(['_id' => 1]);
        
        // $user->carts = json_decode($user->carts, true);
        // echo "ok";
        // print_r(($user));
        helper(['form']);
        // $data = [
        //     'title'     => 'Login',
        //     'page'      => 'Auth/SignIn',
        //     'user'      => false,
        //     'data'      => [
        //     ],
        // ];

        return view('admin/login');
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
                if ($data->isAdmin) {
                    $ses_data = [
                        'user_id'       => $data->_id,
                        'fullname'      => $data->fullName,
                        'email'         => $data->email,
                        'isLoggdIn'     => True,
                        'isAdmin'       => True,
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/admin');

                } else {
                    $session->setFlashdata('msg', 'Tài khoản không có quyền quản trị.');
                return redirect()->to('/admin/login');
                }
            } else {
                $session->setFlashdata('msg', 'Email/Mật khẩu không đúng.');
                return redirect()->to('/admin/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email/Mật khẩu không đúng.');
            return redirect()->to('/admin/login');
        }
    }
}