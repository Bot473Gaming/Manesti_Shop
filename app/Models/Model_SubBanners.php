<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_SubBanners extends MY_Model
{
    public function __construct()
    {
        $this->connectData('subbanner');
    }
    public function getAllSubBanners()
    {
        return $this->getAllData();
    }
    public function getSubBanner($_id)
    {
        return $this->getData($_id);
    }
    public function createSubBanner($data) 
    {
        return $this->dataAdd($data);
    }
    public function updateSubBanner($data, $_id) 
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteSubBanner($_id) 
    {
        return $this->dataDeleteById($_id);
    }
}