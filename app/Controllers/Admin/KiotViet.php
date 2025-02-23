<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_Admin;

class KiotViet extends BaseController
{
    public function __construct() 
    {
        $this->Admin    = new Model_Admin();
    }
    public function index()
    {
        $admin  =  $this->Admin->getDataAdmin();
        $data   = [
            'title'     => 'Kiot Viet',
            'page'      => 'kiotviet',
            'data'      => [
                'admin'    => $admin,
            ],
        ];
        return view('admin/layout', $data);
    }
    public function update()
    {
        $admin  =  $this->Admin->getDataAdmin();
        $clid = $_POST['cl'];
        $pass = $_POST['pass'];
        $admin->clientID = $clid;
        $admin->password = $pass;
        $this->Admin->updateDataAdmin(json_decode(json_encode($admin), true));
    }
}