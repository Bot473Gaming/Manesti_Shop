<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Redirect extends MY_Model
{
    public function __construct()
    {
        $this->connectData('redirect');
    }
    public function getRedirect()
    {
        return $this->getAllData()[0];
    }
    public function updateRedirect($data, $_id = 0) 
    {
        return $this->dataUpdate(json_decode(json_encode($data), true), $_id);
    }
}