<?php
namespace App\Controllers;
use App\Models\CartModel;
class CartController extends BaseController{

    private $CartModel;

    function __construct(){
        $this->CartModel= new CartModel;
    }


    function index() {
        

        
        $this->titlepage = 'Cart';
        $this->renderView("CartView", $this->titlepage, $this->data);
    }


    

}