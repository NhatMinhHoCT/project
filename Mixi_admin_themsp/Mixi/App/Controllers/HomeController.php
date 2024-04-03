<?php
namespace App\Controllers;
use App\Models\ProductModel;
class HomeController extends BaseController{

    private $ProductModel;

    function __construct(){
        $this->ProductModel= new ProductModel;
    }


    function index() {
        $this->titlepage = 'Thời trang trẻ trung Rabbit';
         $dssp_new=$this->ProductModel->sanpham_get_all(0,6);
         $dssp_view=$this->ProductModel->sanpham_get_all(1,6);
         $this->data["New_Product"]=$dssp_new;
         $this->data["View_Product"]=$dssp_view;
        $this->renderView("HomeView", $this->titlepage, $this->data);
    }

    function search(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['keyword'])) {
                header("Location: " . BASE_PATH . "index/search/" . $_POST['keyword']);
                exit();
            }else{
                $_SESSION['keyword'] = '';
                header("Location: " . BASE_PATH . "index");
                exit();
            }
            
        }
        $this->titlepage = 'Tìm kiếm';
        $this->data["Search_Product"] = $this->ProductModel->sanpham_search($_POST['keyword']);
        $this->renderView("SearchView", $this->titlepage, $this->data);
    }


    function createSlug($string) {
        // Chuyển đổi chuỗi về chữ thường
        $string = strtolower($string);
    
        // Xóa ký tự không phải chữ cái, số, hoặc dấu gạch ngang
        $string = preg_replace('/[^a-z0-9-]+/', '-', $string);
    
        // Xóa dấu gạch ngang liên tục
        $string = preg_replace('/-+/', '-', $string);
    
        // Loại bỏ dấu gạch ngang ở đầu và cuối chuỗi
        $string = trim($string, '-');
    
        return $string;
    }
    

}