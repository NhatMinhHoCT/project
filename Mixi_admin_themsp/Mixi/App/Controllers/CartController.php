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
    function addcart(){
        $this->titlepage='Giỏ hàng rỗng';
        if(isset($_POST['addcart'])){
            $IDSP=$_POST['IDSP'];
            $HinhAnhSP=$_POST['HinhAnhSP'];
            $GiaSP=$_POST['GiaSP'];
            $TenSP=$_POST['TenSP'];
            $Soluong=1;
            $check_sp=0;
            if(count($_SESSION["giohang"])>0){
                foreach ($_SESSION["giohang"] as $key => $value) {
                    if($key==$IDSP){
                        $check_sp=1;
                        $_SESSION["giohang"][$IDSP]["Soluong"]+=1;
                        break;
                    } 
                }
            }
            if($check_sp==0){
                $sp=array("IDSP"=>$IDSP,"TenSP"=>$TenSP,"HinhAnhSP"=>$HinhAnhSP,"GiaSP"=>$GiaSP,"Soluong"=>$Soluong);
                $_SESSION["giohang"][$IDSP]=$sp;
            }
        }
        
        // $this->renderView("CartView", $this->titlepage, $this->data);
        header('location: '.BASE_PATH.'viewcart');
    }

    function deletecart(){
        if(count($_SESSION["giohang"])>0){
            $_SESSION["giohang"]=[];
        }
        header('location: '.BASE_PATH);
    }
    function deleteproduct(){
        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', rtrim($url, '/'));
        $idproduct_key = array_search('deleteproduct', $segments);
        $idproduct=$segments[$idproduct_key + 1];
        unset($_SESSION["giohang"][$idproduct]);
        if(count($_SESSION["giohang"])>0){
            // $this->titlepage="Giỏ hàng";
            // $this->data="";
            // $this->renderView("CartView", $this->titlepage, $this->data);
            header('location: '.BASE_PATH.'viewcart');
        }else{
            header('location: '.BASE_PATH);
        }
    }


    

}
