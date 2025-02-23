<?php

namespace App\Core;

use CodeIgniter\Model;

abstract class MY_Model extends Model
{
    protected $builder;
    public function __construct()
    {
        parent::__construct();
    }
    public function connectData($tableName)
    {
        $this->tb = $tableName;
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table($tableName);
    }
    public function getAllData($lm = false, $sl = false)
    {
        if ($lm) {
            $this->builder->limit($lm);
        }
        if ($sl) {
            $this->builder->select($sl);
        }
        $query = $this->builder->get();
        $result = $query->getResult();
        return (count($result) > 0) ? $result : false;
    }
    public function getData($_id)
    {
        $query = $this->builder->getWhere($_id);
        $result = $query->getResult();
        return (count($result) > 0) ? $result : false;
    }
    public function searchData($tb = '*' ,$keyword) {
        $this->builder->like($tb ,$keyword);
    }

    public function dataAdd($data)
    {
        $this->builder->insert($data);
        return $this->db->insertID();
    }

    public function dataUpdate($data, $_id)
    {
        $this->builder->update($data, ['_id' => $_id]); //
    }
    public function dataDeleteById($_id)
    {
        $this->builder->delete(['_id' => $_id]);
    }
    public function sortData($col, $ty = "ASC")
    {
        if ($this->db->fieldExists($col, $this->tb)) {
            $this->builder->orderBy($col, $ty);
        }
    }
    public function countData() {
        $this->builder->countAll();
    }
}
