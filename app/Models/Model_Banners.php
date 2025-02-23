<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Banners extends MY_Model
{
    public function __construct()
    {
        $this->connectData('banners');
    }
    public function getAllBanners()
    {
        return $this->getAllData();
    }
    public function getBanner($_id)
    {
        return $this->getData($_id);
    }
    public function createBanner($data) 
    {
        return $this->dataAdd($data);
    }
    public function updateBanner($data, $_id) 
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteBanner($_id) 
    {
        return $this->dataDeleteById($_id);
    }
}