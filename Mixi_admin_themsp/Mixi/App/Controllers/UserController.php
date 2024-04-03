<?php
namespace App\Controllers;
use App\Models\DatabaseModel;
use App\Models\UserModel;
class UserController extends BaseController{

    private $UserModel;
    private $DatabaseModel;
    


    function __construct(){
        $this->DatabaseModel= new DatabaseModel;
        $this->UserModel= new UserModel($this->DatabaseModel);

    }

    function profile() {
        $this->titlepage = 'My Profile';

        $this->renderView("ProfileView", $this->titlepage, $this->data);
    }

    function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email']) && isset($_POST['password'])) {
            
                $kq = $this->UserModel->userlogin($_POST['email'],$_POST['email'], $_POST['password']);
                if ($kq)  {
                    $_SESSION['user'] = $kq;
                    header("Location: " . BASE_PATH . "index");
                    exit();
                } else {
                    $_SESSION['loidn'] = '<span style="color: red;">Email hoặc mật khẩu không đúng.</span>';
                    header("Location: " . BASE_PATH . "login");
                }
            }
        }
       
        $this->titlepage = 'Đăng Nhập';
        $this->renderView("LoginView", $this->titlepage, $this->data);
    }

    function logout() {
        unset($_SESSION['user']);
        header("Location: " . BASE_PATH . "index");
    }

    

    function signin() {
        if(isset($_POST['signin'])){
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password = $_POST['password'];
            

            $kq = $this->UserModel->user_checkemail($email);
            if ($kq) {
                
                $_SESSION['loidk'] = '<strong>Email đã tồn tại. Vui lòng sử dụng email khác</strong>.';
                header("Location: " . BASE_PATH . "signin");
            }
            else{
                $HinhAnh = 'default.png';
                $Role = 1;
                $this->UserModel->SignIntUser($username, $password, $email, $HinhAnh, $Role);
                header("Location: " . BASE_PATH . "login");
            }
        }
  
        $this->titlepage = 'Đăng Ký';
        $this->renderView("SigninView", $this->titlepage, $this->data);
    }

    

    
}