<?php
  session_start();
  ob_start();
  include "admin/model/connectdb.php";
  include "admin/model/user.php";
  include "view/header.php";
  include "admin/model/danhmuc.php";
  include "admin/model/sanpham.php";
  include "admin/model/nxb.php";
  include "admin/model/tacgia.php";
  $sp1=getall_sanpham1(0);
  if(isset($_GET['act'])){
  switch($_GET['act']){
    case 'dangky':
      if(isset($_POST['dangky'])&&($_POST['dangky'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $address=$_POST['address'];
            
        insert_user($user,$pass,$email,$address);
        header('location: index.php');
        break;
      }
      include "view/dangky.php";
      break;
    case 'logout':
      unset($_SESSION['Access_authority']);
      unset($_SESSION['iduser']);
      unset($_SESSION['username']);
      header('location: index.php');
      break;
    case 'login':
      if(isset($_POST['login'])&&($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $kq=getuserinfo($user,$pass);
        $Access=$kq[0]['Access_authority'];
        if(($Access==1)||($Access==0)){
          if($kq[0]['Access_authority']==1){
            $_SESSION['Access_authority']=$Access;
            header('location: admin/index.php');
          }else{
            $_SESSION['Access_authority']=$Access;
            $_SESSION['iduser']=$kq[0]['id'];
            $_SESSION['username']=$kq[0]['user'];
            header('location: index.php');
            break;
          }
        }
        else {
          $txt_error="Username hoặc Password không đúng";
          echo "<font color='red'>".$txt_error."</font>";
        }
        
      }
      include "view/login.php";
      break;
    case 'sanpham':
      $dsdm=getall_dm();
      if(isset($_GET['iddm'])&&($_GET['iddm'])>0){
        $iddm=$_GET['iddm'];
      }
      $dssp=getall_sanpham1($iddm,"");
      include "view/sachtv.php";
      break;
    case 'timkiem':
      $dsdm=getall_dm();
      if(isset($_POST['kyw'])){
        $kyw=$_POST['kyw'];
      }
      $newkyw = str_replace(' ', '%', $kyw);
      $dssp=getall_sanpham1(0,$newkyw);
      include "view/timkiem.php";
      break;
    case 'product':
      $dsdm=getall_dm();
      if(isset($_GET['id'])&&($_GET['id']>0)){
        $id=$_GET['id'];
        $info=showspdetail($id);
        // $id_nxb=$info[0]['id_nxb'];
        $infonxb=getonenxb($info[0]['id_nxb']);
        $infotg=getonetg($info[0]['id_tacgia']);
      }
      include "view/product.php";
      break;

    case 'cart':
      include "view/cart.php";
      break;
    case 'delivery':
      include "view/delivery.php";
      break;

    case 'trangchu':
      include "view/main.php";
      break;
    }
  }else{
    include "view/main.php";
  }
    
  include "view/footer.php";
?> 