<?php
   include "../func/global.php";
   include "../func/pdo.php";
   include "../func/danhmuc.php";
   include "../func/sanpham.php";
   include "../func/user.php";
   include "view/header.php";
   include "view/footer.php";
    session_start();
    ob_start();
    if(isset($_SESSION['s_user'])&&(is_array($_SESSION['s_user']))&&(count($_SESSION['s_user'])>0)){
        $admin=$_SESSION['s_user'];
    }else{
        header('location: login.php');
    }
   
   if(isset($_GET['pg'])){
      switch ($_GET['pg']) {
         
         case 'user':
            if(isset($_GET['del'])&&($_GET['del'])>0){
               $id=$_GET['del'];
                  user_delete($id);
            }

            if(isset($_POST['timkiem'])){
               $kyw=$_POST['kyw'];
            }else{
               $kyw="";
            }

            $dsuser=user_allds($kyw);
            include "view/user.php";
            break;
       
         case 'categories':
            if(isset($_GET['del'])&&($_GET['del'])>0){
               $id=$_GET['del'];
                  danhmuc_delete($id);
            }

            if(isset($_POST['timkiem'])){
               $kyw=$_POST['kyw'];
            }else{
               $kyw="";
            }

            $dsdm=danhmuc_alldm($kyw);
            include "view/categories.php";
            break;

         case 'categories_add':
            if(isset($_POST['btnadd'])){
               $name=$_POST['name'];
               danhmuc_insert($name);
               $tb="Bạn đã thêm thành công!";
            }

            include "view/categories_add.php";
            break;

         case 'products':

            if(isset($_GET['del'])&&($_GET['del'])>0){
               $id=$_GET['del'];
               $ctsp=get_sanphamchitiet($id);
               if(is_array($ctsp)&&($ctsp!="")){
                  extract($ctsp);
                  $tenfile=$img;
                  $img_path=IMG_PATH_ADMIN.$img;
                  if(is_file($img_path)){
                     unlink($img_path);
                  }
                  sanpham_delete($id);
               }
            }

            if(isset($_POST['timkiem'])){
               $kyw=$_POST['kyw'];
            }else{
               $kyw="";
            }

            if(!isset($_GET['page'])){
               $page=1;
            }else{
               $page=$_GET['page'];
            }

            $soluongsp=6;
            $dssp=get_dssp_admin($kyw,$page,$soluongsp);
            $tongsosp=get_dssp_all();
            $hienthisotrang=hien_thi_so_trang($tongsosp,$soluongsp);
            include "view/products.php";
            break;

         case 'products_add':
            if(isset($_POST['btnadd'])){
               $iddm=$_POST['iddm'];
               $name=$_POST['name'];
               $price=$_POST['price'];
               $tacgia=$_POST['tacgia'];

               if(isset($_POST['dacbiet'])){
                  $dacbiet=$_POST['dacbiet'];
                  if($dacbiet) $dacbiet=1; else $dacbiet=0;
               }else{
                  $dacbiet=0;
               }

               $img=basename($_FILES['img']['name']);
               $target_file=IMG_PATH_ADMIN.$img;
               move_uploaded_file($_FILES['img']['tmp_name'],$target_file );
               sanpham_insert($iddm, $name, $img, $price, $tacgia, $dacbiet);
               $tb="Bạn đã thêm thành công!";
            }
            $dsdm=danhmuc_all();
            include "view/products_add.php";
            break;

         case 'products_update':
            $dsdm=danhmuc_all();
            if(isset($_GET['id'])&&($_GET['id']>0)){
               $spct=get_sanphamchitiet($_GET['id']);
            }
            if(isset($_POST['btnupdate'])){
               $iddm=$_POST['iddm'];
               $name=$_POST['name'];
               $price=$_POST['price'];
               $tacgia=$_POST['tacgia'];
               $id=$_POST['id'];
               if(isset($_POST['dacbiet'])){
                  $dacbiet=$_POST['dacbiet'];
                  if($dacbiet) $dacbiet=1; else $dacbiet=0;
               }else{
                  $dacbiet=0;
               }

               $img=$_FILES['img']['name'];
               if($img!=""){
                  
                  $target_file=IMG_PATH_ADMIN.$img;
                  move_uploaded_file($_FILES['img']['tmp_name'],$target_file );
               }else{
                  $img="";
               }
               sanpham_update($iddm, $name, $img, $price, $dacbiet, $tacgia, $id);         
            }
            include "view/products_update.php";
            break;
            
         

         case 'logout':
            if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
               unset($_SESSION['s_user']);
            }
            header('location: login.php');
            break;

         case 'orders':
            include "view/orders.php";
            break;
            
         default:
            include "view/home.php";
            break;
      }
   }
   else{
      include "view/home.php";
   }
   
?>