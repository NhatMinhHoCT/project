<?php
namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController{

    private $ProductModel;

    function __construct(){
        $this->ProductModel= new ProductModel;
    }


    function index() {
        // Lấy giá trị 'idcatalog' từ URL hoặc mặc định là 0 nếu không có
        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', rtrim($url, '/'));
        $idcatalog_key = array_search('idcatalog', $segments);
        $key_search = array_search('search', $segments);
            
        $idcatalog = 0;  // Giá trị mặc định
        if ($idcatalog_key !== false && isset($segments[$idcatalog_key + 1])) {
            $idcatalog = (int) $segments[$idcatalog_key + 1];
        }

        if ($key_search !== false && isset($segments[$key_search + 1])) {
            $kyw = $segments[$key_search + 1];
        }else{
            $kyw="";
        }
       
        
        // Lấy giá trị 'trang' từ URL hoặc mặc định là 1 nếu không có
        $trang_key = array_search('sotrang', $segments);
        $sotrang = 1;  // Giá trị mặc định
        if ($trang_key !== false && isset($segments[$trang_key + 1])) {
            $sotrang = (int) $segments[$trang_key + 1];
        } 
        $this->titlepage = 'Sản Phẩm';
        $slsp=9;
        $dssp_all=$this->ProductModel->sanpham_get_all_catalog($kyw,$idcatalog,$slsp,$sotrang);
        $cata_all=$this->ProductModel->danhmuc_get_all();
        $this->data["All_Cata"]=$cata_all;
        $this->data["All_Product"]=$dssp_all;
        $this->renderView("ProductView", $this->titlepage, $this->data);
    }


    function detail() {
        $url = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/",$url);
        if(count($url_array)>0){
            $id=$url_array[count($url_array)-1];
        }else{
            $id="";
        }
        if(isset($_GET['idcatalog'])){
            $idcatalog = $_GET['idcatalog'];
        }else{
            $idcatalog=0;
        }
        
        $slsp=3;
        $sotrang=1;
        $dssp_SPTT=$this->ProductModel->sanpham_get_all_catalog("",$idcatalog,$slsp,$sotrang);      
        $this->data["SPTT_Product"]=$dssp_SPTT;
        $get_sanpham=$this->ProductModel->sanpham_get_one($id);
        if(is_array($get_sanpham)){
            extract($get_sanpham);
        $this->titlepage = $TenSP;
        $this->data["DetailSP"]=$get_sanpham;
        $this->renderView("ProductDetailView", $this->titlepage, $this->data);
        }
        else{
            header("Location: " . BASE_PATH . "index");
            exit();
        }
    }



    function productstyle() {
        $this->titlepage = 'Product Style';
        $this->renderView("ProductStyleView", $this->titlepage, $this->data);
    }

    

    
}