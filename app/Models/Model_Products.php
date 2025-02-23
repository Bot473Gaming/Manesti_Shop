<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Products extends MY_Model
{
    public function __construct()
    {
        $this->connectData('products');
    }
    public function getAllProducts($lm = false)
    {
        return $this->getAllData($lm);
    }
    public function getProduct($_id)
    {
        return $this->getData($_id);
    }
    public function createProduct($data) 
    {
        return $this->dataAdd($data);
    }
    public function updateProduct($data, $_id) 
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteProduct($_id) 
    {
        return $this->dataDeleteById($_id);
    }
    public function sortProduct($col, $ty = "ASC") {
        return $this->sortData($col, $ty);
    }
    public function searchProduct($col, $keyword) {
        return $this->searchData($col, $keyword);

    }
}
