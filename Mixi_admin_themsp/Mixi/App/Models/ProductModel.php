<?php
namespace App\Models;
    class ProductModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }
        function sanpham_get_all($view,$limit){
            $sql="select * from sanpham where 1";
            if ($view>0){
                $sql.=" order by ViewSP desc limit ".$limit;
            }else{
                $sql.=" order by IDSP desc limit ".$limit;
            }
            return $this->db->get_all($sql);

        }

        // admin
        function insert_product($IDDM,$TenSP,$HinhAnhSP,$GiaSP,$MotaSP,$trangthai){
          $sql="insert into sanpham(MaDM,TenSP,HinhAnhSP,GiaSP,MotaSP,trangthai) values('$IDDM','$TenSP','$HinhAnhSP','$GiaSP','$MotaSP','$trangthai')";
          // echo $sql; 
          $this->db->pdo_insert($sql);

        }

        function danhmuc_get_all(){
          $sql="select * from danhmuc order by IDDM asc";

          return $this->db->get_all($sql);
        }

        function gettrangthai($i){
          $kq="-";
          switch ($i) {
            case '1':
              $kq="hot";
              break;

            case '2':
              $kq="New";
              break;
            case '3':
              $kq="Sale";
              break;
            
            default:
              # code...
              break;
          }
          return $kq;
        }

        function sanpham_get_all_catalog($kyw,$idcatalog,$slsp,$sotrang){
            $sql="select * from sanpham where 1";
            if ($idcatalog>0){
                $sql.=" AND MaDM= ".$idcatalog;
            }
            if($kyw!=""){
                $sql.=" AND TenSP LIKE '%".$kyw."%'";
            }

            $limit1=($sotrang-1)*$slsp;
            $limit2=$slsp;

            $sql.=" order by IDSP desc limit ".$limit1.",".$limit2;
            return $this->db->get_all($sql);
        }

 
        function sanpham_search($keyword){
          $sql="SELECT * FROM sanpham WHERE TenSP LIKE '%$keyword%'";
          return $this->db->get_all($sql);
        }

        function sanpham_get_one($id){
          $sql="select * from sanpham where IDSP=?";
          return $this->db->get_one($sql,$id);
        }
        


        function show_products($dssp){
            $html_dssp_home='';
                foreach ($dssp as $item) {
                extract($item);

                $hrefsp=BASE_PATH . 'product/detail/'.$IDSP;
                $GiaSPForm = number_format($GiaSP, 0, ',', '.');
            $html_dssp_home.= '
                <div class="col-lg-4 col-md-6">
                  <div class="item" style="text-align:center">
                    <a href="'.$hrefsp.'"><img src="'.BASE_PATH.FILE_UPLOAD.$HinhAnhSP.'" alt="'.$TenSP.'"></a>
                    <span class="category">'.$HangSP.'</span>
                    <h6>'.$GiaSPForm.' VND</h6>
                    <h4 class="text-center"><a href="'.$hrefsp.'" >'.$TenSP.'</a></h4>
            
                    <form action="'.BASE_PATH.'addcart" method="post">
                      <input type="hidden" name="IDSP" value="'.$IDSP.'">
                      <input type="hidden" name="HinhAnhSP" value="'.$HinhAnhSP.'">
                      <input type="hidden" name="GiaSP" value="'.$GiaSP.'">
                      <input type="hidden" name="TenSP" value="'.$TenSP.'">
                      <button type="submit" name="addcart">Thêm vào giỏ hàng</button>
                    </form>
                    
                  </div>
                </div>';
            }
            return  $html_dssp_home;
        }


        function show_all_products($dssp){
            $html_dssp_all_product='';
                foreach ($dssp as $item) {
                extract($item);
                $hrefsp=BASE_PATH . 'product/detail/'.$IDSP;
                $GiaSPForm = number_format($GiaSP, 0, ',', '.');
                $html_dssp_all_product.= '
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                <div class="item">
                  <a href="'.$hrefsp.'"><img src="'.BASE_PATH.FILE_UPLOAD.$HinhAnhSP.'" alt=""></a>
                  <span class="category">'.$HangSP.'</span>
                  <h6>'.$GiaSPForm.' VND</h6>
                  <h4 class="text-center"><a href="'.$hrefsp.'">'.$TenSP.'</a></h4>
                  
                  <div class="main-button">
                  <a href="'.BASE_PATH.'addcart/'.$IDSP.'">Thêm vào giỏ hàng</a>
                    
                  </div>
                </div>
              </div>
            
            ';
            }
            return  $html_dssp_all_product;
        }

       
        function show_tt($dssp){
          $html_dssp_all_product='';
              foreach ($dssp as $item) {
              extract($item);
              $hrefsp=BASE_PATH . 'product/detail/'.$IDSP;
              $GiaSPForm = number_format($GiaSP, 0, ',', '.');
              $html_dssp_all_product.= '
              <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
              <div class="item">
                <a href="'.$hrefsp.'"><img src="'.BASE_PATH.FILE_UPLOAD.$HinhAnhSP.'" alt=""></a>
                <span class="category">'.$HangSP.'</span>
                <h6>'.$GiaSPForm.' VND</h6>
                <h4 class="text-center"><a href="'.$hrefsp.'">'.$TenSP.'</a></h4>
                
                <div class="main-button">
                <a href="'.BASE_PATH.'addcart/'.$IDSP.'">Thêm vào giỏ hàng</a>
                  
                </div>
              </div>
            </div>
          
          ';
          }
          return  $html_dssp_all_product;
      }
        


    }

?>