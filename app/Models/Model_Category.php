<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Category extends MY_Model
{
    public function __construct()
    {
        $this->connectData('category');
    }
    public function getCategorys()
    {
        return $this->getAllData()[0];
    }
    public function updateCategory($data, $_id = 0) 
    {
        return $this->dataUpdate($data, $_id);
    }
}