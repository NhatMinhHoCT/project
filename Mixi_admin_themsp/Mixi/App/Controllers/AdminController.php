<?php
namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\DatabaseModel;
use App\Models\UserModel;
use App\Models\ProductModel;

class AdminController extends AdminBaseController{

        private $AdminModel;
        private $UserModel;
        private $DatabaseModel;
        private $ProductModel;

        function __construct(){
            $this->AdminModel= new AdminModel;
            $this->DatabaseModel= new DatabaseModel;
            $this->UserModel= new UserModel($this->DatabaseModel);
            $this->ProductModel= new ProductModel($this->DatabaseModel);
        }

        function index(){
            if(isset($_SESSION['user'])&&($_SESSION['user']['Role']==1)){
                $this->titlepage = 'Admin Control Panel';
                $this->renderView("HomeAdmin", $this->titlepage, $this->data);
            }else{
                $this->titlepage = 'KHU VỰC DÀNH CHO QUẢN TRỊ VIÊN';
                $this->renderView("LoginForm", $this->titlepage, $this->data);
            }
            
        }

        function categoryadmin(){
            $dsdm_admin=$this->AdminModel->category_get_all();
            $this->data["danhmuc_all"]=$dsdm_admin;
            $this->titlepage = 'Quản lý danh mục';
            $this->renderView("CategoryAdmin", $this->titlepage, $this->data);
        }

        function productadmin(){
            $dssp_admin=$this->AdminModel->product_get_all();
            $this->data["sanpham_all"]=$dssp_admin;
            $this->titlepage = 'Quản lý sản phẩm';
            $this->renderView("ProductAdmin", $this->titlepage, $this->data);
        }

        function logout(){
            if(isset($_SESSION['user'])){
                unset($_SESSION['user']);
                unset($_SESSION['loidnadmin']);
                header("Location: " . BASE_PATH . "admin/loginform");
            }
        }

        function loginform(){
            $this->titlepage = 'KHU VỰC DÀNH CHO QUẢN TRỊ VIÊN';
            $this->renderView("LoginForm", $this->titlepage, $this->data);
        }

        function login(){
            if(isset($_POST["btnLogin"])){
                $email=$_POST["email"];
                $password=$_POST["password"];
                $kq = $this->UserModel->userlogin($email,$email, $password);

                if (is_array($kq))  {
                    $_SESSION['user'] = $kq;
                    header("Location: " . BASE_PATH . "admin");
                    exit();
                } else {
                    $_SESSION['loidnadmin'] = '<span style="color: red;">Email hoặc mật khẩu không đúng.</span>';
                    header("Location: " . BASE_PATH . "admin/loginform");
                }

            }
            $this->titlepage = 'Home';
            $this->renderView("HomeAdmin", $this->titlepage, $this->data);
        }
        
        function addcatalogform(){
            $this->titlepage = 'Thêm danh mục mới';
            $this->renderView("AddCatalogForm", $this->titlepage, $this->data);
        }

        function addcatalog(){
            $this->titlepage = 'Danh sách danh mục';
            $dsdm_admin=$this->AdminModel->category_get_all();
            $this->data["danhmuc_all"]=$dsdm_admin;
            $this->renderView("CategoryAdmin", $this->titlepage, $this->data);
        }


        function addproductform(){

            $this->titlepage = 'Thêm sản phẩm mới';
            $dsdm_admin=$this->AdminModel->category_get_all();
            $this->data["danhmuc_all"]=$dsdm_admin;
            $this->renderView("AddProductForm", $this->titlepage, $this->data);
        }

        


        function addproduct(){
            // lấy dữ liệu từ form
            if(isset($_POST['btnaddproduct'])){
                $iddm=$_POST["iddm"];
                $tensp=$_POST["tensp"];
                $giasp=$_POST["giasp"];
                $motasp=$_POST["motasp"];
                $trangthaisp=$_POST["trangthaisp"];

                $HinhAnhSP=$_FILES["hinhanhsp"]["name"];

                // upload file lên host
                $uploadOk=1;
                // kiểm tra các trường hợp
                // có phải hình không
                // hình có tồn tại trên host chưa
                // Kích thước hình
                $target_file=FILE_UPLOAD.basename($_FILES["hinhanhsp"]["name"]);
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                if($uploadOk==1){
                    move_uploaded_file($_FILES["hinhanhsp"]["tmp_name"], $target_file);
                }

                try {
                    // insrert into
                    $this->ProductModel->insert_product($iddm,$tensp,$HinhAnhSP,$giasp,$motasp,$trangthaisp);
                    // chuyển về trang dssp
                    header("Location: " . BASE_PATH . "admin/product");
                    // $this->titlepage = 'Quản lý sản phẩm';
                    // $dssp_admin=$this->AdminModel->product_get_all();
                    // $this->data["sanpham_all"]=$dssp_admin;
                    // $this->renderView("ProductAdmin", $this->titlepage, $this->data);
                } catch (\Throwable $th) {
                    //throw $th;
                    self::addproductform();
                    

                }

                
            }else{
                self::addproductform();
            }
            
        }

        function billadmin(){

            $this->titlepage = 'Quản lý đơn hàng';
            $this->renderView("BillAdmin", $this->titlepage, $this->data);
        }
        
        function addadmin(){

            $this->titlepage = 'Thêm mới ';
            $this->renderView("AddFormAdmin", $this->titlepage, $this->data);
        }

}