<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Users extends MY_Model
{
    public function __construct()
    {
        $this->connectData('users');
    }
    public function getAllUsers()
    {
        return $this->getAllData();
    }
    public function getUser($_id)
    {
        return $this->getData($_id);
    }
    public function createUser($data) 
    {
        return $this->dataAdd($data);
    }
    public function updateUser($data, $_id) 
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteUser($_id) 
    {
        return $this->dataDeleteById($_id);
    }
}
