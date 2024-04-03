<?php
require_once "App/Config/func.php";
if(isset($_POST["btnsearch"])&&($_POST['kyw']!="")){
    $kyw=create_slug($_POST['kyw'],1);
    header('location: '.BASE_PATH.'product/search/'.$kyw);
}else{
    header('location: '.BASE_PATH);
}