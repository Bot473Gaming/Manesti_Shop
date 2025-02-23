<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Auth extends MY_Model
{
    public function __construct() {
        parent::__construct();
        $this->connectData('users');
    }
    // This function checks if the email exists in the database
    public function checkEmail($email = null) {
        if ($email) {
            $query = $this->getData(['email' => $email]);
            return ($query)? true : false;
        }
        return false;
    }

    public function login($email, $password) {
        if ($email && $password) {
            $query = $this->getData(['email' => $email]);
            if ($query) {
                $hash_password = $query->password == $password;
                if ($hash_password) {
                    return $query;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        return false;
    }
    
}