<?php
namespace App\Controllers;

class AdminBaseController{
    protected $data=[];
    protected $titlepage="";
    function renderView($viewpage, $titlepage, $data) {
        $viewfile=  'App/Views/Admin/' . $viewpage . '.php';
        if (is_file($viewfile)){
            include $viewfile;
        }else{
            echo 'Trang không tồn tại';
        }
    }
}