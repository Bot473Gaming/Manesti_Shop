<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Model_Users;
use App\Models\Model_Category;

class SignUp extends BaseController
{
    public function __construct() {
        // parent::__construct();
        $this->Users = new Model_Users();
        $this->Category    = new Model_Category();
    }
    public function index() {
        // if (!$_SESSION['logged_in']) {
        if (session()->get('isLoggdIn')) {
            return redirect()->to('/');
        }
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        helper(['form']);
        $bc = [
            (object) [
                'name'  => 'Tài khoản',
                'url'   =>'',
            ],  
        ];
            $data = [
                'title'     => 'Đăng kí',
                'page'      => 'Auth/SignUp',
                'breadcrumbs'=> $bc,
                'user'      => false,
                'category'    => $category,
                'data'      => [
                ],
            ];
            return view('layout', $data);
        // }
        // return redirect()->to('/');
    }
    public function store() {
        helper(['form']);
        $rules = [
            // 'userName'      => 'required|min_length[2]|max_length[50]',
            // 'phone'         => 'required|min_length[8]|max_length[11]|valid_phone|is_unique[users.phone]',
            'fullName'          => 'required|min_length[3]',
            'email'             => 'required|max_length[100]|valid_email|is_unique[users.email]',
            'password'          => 'required|min_length[6]|max_length[50]',
            'confirmpassword'   => 'required|matches[password]'
        ];
        $errors = [
            'fullName' => [
                'required'  => 'Vui lòng nhập tên của bạn.',
                'min_length'=> 'Tên của bạn quá ngắn, hãy nhập lại nhé.',
            ],
            'email' => [
                'required'      => 'Vui lòng nhập Email của bạn.',
                'valid_email'   => 'Vui lòng kiểm tra lại trường Email.',
                'is_unique'     => 'Email này đã được sử dụng, hãy nhập lại nhé.',
                'max_length'    => 'Email của bạn quá dài, hãy nhập lại nhé.',	
            ],
            'password' => [
            	'min_length'    => 'Mật khẩu tối thiểu phải có 6 kí tự.',
            ],
            'confirmpassword' => [
                'matches'       => 'Mật khẩu không chính xác.'    
            ]
        ];
        if($this->validate($rules, $errors)){
            $data = [
                // 'name'     => $this->request->getVar('name'),
                // 'phone'    => $this->request->getVar('phone'),
                'fullName' => $this->request->getVar('fullName'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'carts'     => '[]',
            ];
            // echo "<pre>";
            // print_r($data);
            $this->Users->createUser($data);
            return redirect()->to('account/signin');
        }else{
            echo '<pre>';
            $validation = \Config\Services::validation();
            $temp = $validation->getErrors();
            $val = '';
            foreach($temp as $error=>$message) {
                $val .= $message ."</br>";
            }
            $session = session();
            $session->setFlashdata('msg', $val);
            return redirect()->to('account/signup');
        }
        
    }
}