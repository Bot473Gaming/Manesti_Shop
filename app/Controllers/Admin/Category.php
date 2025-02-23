<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_Category;

class Category extends BaseController
{
    public function __construct() 
    {
        $this->Category    = new Model_Category();
    }
    public function index()
    {
        $category  =  $this->Category->getCategorys();
        $category  = json_decode($category->value);
        $data   = [
            'title'     => 'Danh mục',
            'page'      => 'category',
            'data'      => [
                'category'    => $category,
            ],
        ];
        // echo '<pre>';
        // print_r($data);
        return view('admin/layout', $data);
    }
    public function update()
    {
        $category = $_POST['category'];
        $obj = [
            '_id'   => 0,
            'value' => $category,
        ];
        $this->Category->updateCategory($obj);
    }
}