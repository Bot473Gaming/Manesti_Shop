<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Orders extends MY_Model
{
    public function __construct()
    {
        $this->connectData('orders');
    }
    public function getAllOrders($sl = false)
    {
        return $this->getAllData(false, $sl);
    }
    public function getOrder($_id)
    {
        return $this->getData($_id);
    }
    public function createOrder($data) 
    {
        return $this->dataAdd($data);
    }
    public function updateOrder($data, $_id) 
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteOrder($_id) 
    {
        return $this->dataDeleteById($_id);
    }
    public function sortOrder($col, $ty = "ASC") {
        return $this->sortData($col, $ty);
    }
}
