<?php

namespace App\Controllers;


class LogOut extends BaseController
{
    public function index() 
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
    public function admin() 
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }
}