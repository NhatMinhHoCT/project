<?php
namespace App\Models;

class AdminModel{
    private $db;

    function __construct(){
        $this->db = new DatabaseModel;
    }
    
    function product_get_all(){
        $sql="select * from sanpham";
        return $this->db->get_all($sql);
    }

    function category_get_all(){
        $sql="select * from danhmuc order by IDDM asc";
        return $this->db->get_all($sql);
      }

    function bill_get_all(){
        $sql="select * from donhang";
        return $this->db->get_all($sql);
    }


}