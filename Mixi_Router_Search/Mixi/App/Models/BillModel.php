<?php
namespace App\Models;
class BillModel{
    private $db;

    function __construct(){
        $this->db = new DatabaseModel;
    }
}