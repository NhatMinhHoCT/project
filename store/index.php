<?php
    session_start();
    ob_start();
    if(!isset($_SESSION["giohang"])){
        $_SESSION["giohang"]=[];
    }
    include "func/pdo.php";
    include "func/user.php";
    include "func/danhmuc.php";
    include "func/sanpham.php";
    include "func/giohang.php";

    include "view/header.php";
    $dssp_new=get_dssp_new(4);
    $dssp_best=get_dssp_best(4);
    


    if(!isset($_GET['pg'])){
        include "view/home.php";
        }
        else{
        switch ($_GET['pg']) {
            case 'login':
                if(isset($_POST["dangnhap"])&&($_POST["dangnhap"])){
                    $username=$_POST["username"];
                    $password=$_POST["password"];
               
                    $kq=checkuser($username,$password);
                    if(is_array($kq)&&(count($kq))){
                        $_SESSION['s_user']=$kq;
                        header('location: index.php');
                    }else{
                        $tb="Username hoặc password không đúng";
                        $_SESSION['tb_dangnhap']=$tb;
                        header('location: index.php?pg=dangnhap');
                    }
                    
                }
                break;

            case 'logout':
                if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    unset($_SESSION['s_user']);
                }
                header('location: index.php');
                break;

            case 'dangnhap':
                include "view/dangnhap.php";
                break;

            case 'dangky':
                include "view/dangky.php";
                break;

            case 'updateuser':
                if(isset($_POST["capnhat"])&&($_POST["capnhat"])){
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                    $diachi=$_POST["diachi"];
                    $dienthoai=$_POST["dienthoai"];
                    $id=$_POST["id"];
                    $role=0;
                    user_update($username,$password,$email,$diachi,$dienthoai,$role,$id);
                    include "view/myaccount_confirm.php";
                }
                break;

            case 'sanpham':
                $dsdm=danhmuc_all();
                $kyw="";
                $titlepage="";

                if(!isset($_GET['iddm'])){
                    $iddm=0;
                }else{
                    $iddm=$_GET['iddm'];
                    $titlepage=get_name_dm($iddm);
                }

                if(isset($_POST["timkiem"])&&($_POST["timkiem"])){
                    $kyw=$_POST["kyw"];
                    $titlepage="Kết quả tìm kiếm với từ khóa: <span>".$kyw."</span>";
                }

                $dssp=get_dssp($kyw,$iddm,12);

                include "view/sanpham.php";
                break;

            case 'sanphamchitiet':
                $dsdm=danhmuc_all();

                if(isset($_GET["id"])&&($_GET["id"]>0)){
                    $id=$_GET["id"];
                    $iddm=get_iddm($id);
                    $dssp_lienquan=get_dssp_lienquan($iddm,$id,4);
                    $spchitiet=get_sanphamchitiet($id);
                    include "view/sanphamchitiet.php";
                }
                else{
                    include "view/home.php";
                }
                
                break;
            case 'addcart':
                if(isset($_POST["addcart"])){
                    $name=$_POST["name"];
                    $img=$_POST["img"];
                    $price=$_POST["price"];
                    $soluong=$_POST["soluong"];
                    $sp=array("name"=>$name,"img"=>$img,"price"=>$price,"soluong"=>$soluong);
                    array_push($_SESSION["giohang"],$sp);
                    header('location: index.php?pg=viewcart');
                }
                break;

            case 'viewcart':
                if(isset($_GET['del'])&&($_GET['del']==1)){
                    unset($_SESSION["giohang"]);
                    header('location: index.php');
                }
                else{
                    if(isset($_SESSION["giohang"])){
                        $tongdonhang=get_tongdonhang();
                    }
                    
                    $thanhtoan=$tongdonhang; 
                    include "view/viewcart.php";
                }
                 
                break;

            
            

            case 'myaccount':
                if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    
                    include "view/myaccount.php";
                }
                
                break;

            
            case 'adduser':
                if(isset($_POST["dangky"])&&($_POST["dangky"])){
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                    user_insert($username, $password, $email);
                }
                include "view/dangnhap.php";
                break;

            

            
    
            default:
                include "view/home.php";
                break;
        }
    }
    
    include "view/footer.php";
?>