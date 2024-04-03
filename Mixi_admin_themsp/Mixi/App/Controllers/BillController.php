<?php
namespace App\Controllers;
use App\Models\BillModel;

class BillController extends BaseController{
    private $BillModel;

    function __construct(){
        $this->BillModel= new BillModel;
    }
    public function checkout()
    {
        // $cart = new CartModel();
        // $data = $cart->getCart();
        // $this->view("checkout", $data);
    }

}