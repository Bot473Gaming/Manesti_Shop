<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Model_Redirect;

class Redirect extends BaseController
{
    public function __construct()
    {
        $this->Redirect     = new Model_Redirect();
    }
    public function index()
    {
        $redirect = $this->Redirect->getRedirect();
        
        $data = [
        'title'     => "Chuyển hướng",
        'page'      => 'redirect',
        'data'      => [
            'redirect'     => json_decode($redirect->val),
            
            ],
        ];
        return view('admin/layout',$data);
        // return redirect()->to('https://zalo.me/g/nxwqje848');
    }
    public function update() {
        $val = $_POST['val'];
        $data = [
            '_id'   => 0,
            'val'   => $val,
            
        ];
        $this->Redirect->updateRedirect($data);
    }
}