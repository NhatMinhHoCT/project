<?php
namespace App\Controllers;
class BaseController{
    protected $data=[];
    protected $titlepage="";
    function renderView($viewpage, $titlepage, $data) {

        $viewfile=  'App/Views/User/' . $viewpage . '.php';
        if (is_file($viewfile)){
            include $viewfile;
        }else{
            echo 'Trang này không tồn tại';
        }

    }
}

