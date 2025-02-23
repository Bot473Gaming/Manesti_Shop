<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Admin extends MY_Model
{
    public function __construct()
    {
        $this->connectData('admins');
    }
    public function getDataAdmin()
    {
        return $this->getAllData()[0];
    }
    public function updateDataAdmin($data, $_id = 0) 
    {
        return $this->dataUpdate(json_decode(json_encode($data), true), $_id);
    }
}
