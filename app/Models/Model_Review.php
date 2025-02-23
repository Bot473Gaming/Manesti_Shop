<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Review extends MY_Model
{
    public function __construct()
    {
        $this->connectData('review');
    }
    public function getAllReviews()
    {
        return $this->getAllData();
    }
    public function getReview($_id)
    {
        return $this->getData($_id);
    }
    public function createReview($data) 
    {
        return $this->dataAdd($data);
    }
    public function updateReview($data, $_id) 
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteReview($_id) 
    {
        return $this->dataDeleteById($_id);
    }
}
