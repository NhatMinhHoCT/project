<?php
session_start();
ob_start();
if(isset($_SESSION['Access_authority'])&&($_SESSION['Access_authority']==1)){
  include "model/connectdb.php";
  include "model/danhmuc.php";
  include "model/sanpham.php";
  include "model/tacgia.php";
  include "model/nxb.php";
  include "model/account.php";
  include "view/header.php";
    if(isset($_GET['act'])){
      switch($_GET['act']){
        case 'danhmuc':
          $kq=getall_dm();
          include "view/danhmuc.php";
          break;
        case 'sanpham':
          $dsdm=getall_dm();
          $kq=getall_sanpham();
          include "view/sanpham.php";
          break;
        /*case 'updatesp':
          $dsdm=getall_dm();
          if(isset($_GET['id'])&&($_GET['id']>0)){
            $sp1=getonesp($_GET['id']);
          }
          $kq=getall_sanpham();
          include "view/updatesp.php";
          break;*/
        case 'updatesp':
            $dsdm=getall_dm();
            if(isset($_POST['capnhat'])&&($_GET['capnhat']>0)){
              $iddm=$_POST['id_danhmuc'];
              $idtg=$_POST['id_tacgia'];
              $idnxb=$_POST['id_nxb'];
              $tensach=$_POST['tensach'];
              $mota=$_POST['mota'];
              $giaban=$_POST['giaban'];
              $id_sach=$_POST['id_sach'];
              if($_FILES["anhsach"]["name"]!=""){
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["anhsach"]["name"]);
                $anhsach=$target_file;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif" ) {
                    $uploadOk = 0;
              }
              move_uploaded_file($_FILES["anhsach"]["tmp_name"], $target_file);
              }else{
                $anhsach="";
              }
              updatesp($id_sach,$iddm,$idtg, $idnxb, $tensach,$anhsach,$mota,$giaban);
            }
            $kq=getall_sanpham();
            include "view/updatesp.php";
            break;
        case 'sanpham_add':
          $dsnxb=getall_nxb();
          $dstg=getall_tg();
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $iddm=$_POST['id_danhmuc'];
            $idtg=$_POST['id_tacgia'];
            $idnxb=$_POST['id_nxb'];
            $tensach=$_POST['tensach'];
            $mota=$_POST['mota'];
            $giaban=$_POST['giaban'];
            
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["anhsach"]["name"]);
            $anhsach=$target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" ) {
                $uploadOk = 0;
              }
              move_uploaded_file($_FILES["anhsach"]["tmp_name"], $target_file);
              insert_sanpham($iddm, $tensach, $anhsach, $mota, $giaban, $idtg, $idnxb);
            }
            $dsdm=getall_dm();            
            $kq=getall_sanpham();
            include "view/sanpham.php";
            break;
        case 'delsp':
            if(isset($_GET['id'])){
              $id=$_GET['id'];
              delsp($id);
            }
              $dsdm=getall_dm();
              $kq=getall_sanpham();
              include "view/sanpham.php";
              break;
        case 'deldm':
          if(isset($_GET['id'])){
            $id=$_GET['id'];
            deldm($id);
          }
            $kq=getall_dm();
            include "view/danhmuc.php";
            break;
        case 'adddm':
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $tendm=$_POST['tendm'];
            themdm($tendm);
          }
            $kq=getall_dm();
            include "view/danhmuc.php";
            break;
        case 'updatedm':
          if(isset($_GET['id'])){
            $id=$_GET['id'];
            $kqone=getonedm($id);
            $kq=getall_dm();
            include "view/updatedm.php";
          }
          if(isset($_POST['id'])){
            $id=$_POST['id'];
            $tendm=$_POST['tendm'];
            updatedm($id,$tendm);
            $kq=getall_dm();
            include "view/danhmuc.php";
          }
            break;
     ///Tacgia       
        case 'tacgia':
          $kq=getall_tg();
            include "view/tacgia.php";
            break;
        case 'deltg':
              if(isset($_GET['id'])){
                $id=$_GET['id'];
                deltg($id);
              }
                $kq=getall_tg();
                include "view/tacgia.php";
                break;
            case 'addtg':
              if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tentg=$_POST['tentg'];
                $info=$_POST['info'];
                themtg($tentg,$info);
              }
                $kq=getall_tg();
                include "view/tacgia.php";
                break;
            case 'updatetg':
              if(isset($_GET['id'])){
                $id=$_GET['id'];
                $kqone=getonetg($id);
                $kq=getall_tg();
                include "view/updatetg.php";
              }
              if(isset($_POST['id'])){
                $id=$_POST['id'];
                $tentacgia=$_POST['tentacgia'];
                updatetg($id,$tentacgia);
                $kq=getall_tg();
                include "view/tacgia.php";
              }
                break;
    ///nxb       
    case 'nxb':
      $kq=getall_nxb();
        include "view/nxb.php";
        break;
    case 'delnxb':
          if(isset($_GET['id'])){
            $id=$_GET['id'];
            delnxb($id);
          }
            $kq=getall_nxb();
            include "view/nxb.php";
            break;
    case 'addnxb':
      if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
        $tennxb=$_POST['tennxb'];
        $diachi=$_POST['diachi'];
        themnxb($tennxb,$diachi);
      }
        $kq=getall_nxb();
        include "view/nxb.php";
        break;
    case 'updatenxb':
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $kqone=getonenxb($id);
        $kq=getall_nxb();
        include "view/updatenxb.php";
      }
      if(isset($_POST['id'])){
        $id=$_POST['id'];
        $tennxb=$_POST['tennxb'];
        updatenxb($id,$tennxb);
        $kq=getall_nxb();
        include "view/nxb.php";
      }
        break;
    case 'taikhoan':
          $kq=getall_acc();
            include "view/account.php";
            break;
    case 'delacc':
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        delacc($id);
      }
      $kq=getall_acc();
      include "view/account.php";
      break;

    case 'dangxuat':
          if(isset($_SESSION['Access_authority'])) unset($_SESSION['Access_authority']);
          header('location: login.php');
      }   
    }else {
      $kq=getall_dm();
      include "view/danhmuc.php";
    }
    include "view/footer.php";
}else{
  header('location: login.php');
}
?>
