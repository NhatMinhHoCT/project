<?php
  if(!is_array($info)){
    echo 'Sản phẩm không tồn tại.';
  }else{
?>
<section class="product">
  <div class="container">
    <div class="row">
      <div class="product-left">
          <ul>
            <?php
              foreach ($dsdm as $dm){
                echo '<li class="product-left-li"><a href="index.php?act=sanpham&iddm='.$dm['id_danhmuc'].'">'.$dm['tendanhmuc'].'</a></li>';
              }
            ?>
          </ul>
      </div>
      <div class="product-right row">
        <div class="product-content-left">
          <div class="product-content-left-big-img">
            <img src="admin/<?=$info[0]['anhsach']?>" alt="">
          </div>
        </div>
        <div class="product-content-right">
          <div class="product-content-right-product-name">
            <h1><?=$info[0]['tensach']?></h1>
          </div>
          <div class="product-content-right-product-price">
            <h3><?=$info[0]['giaban']?><sup>đ</sup></h3>
          </div>
       
          <div class="product-content-right-product-publisher">
            <p>Nhà xuất bản: <span><?=$infonxb[0]['tennxb']?></span></p>
            <br>
            <p>Tác giả: <span><?=$infotg[0]['tentacgia']?></span></p>
          </div>
          <div class="quantity">
            <p style="font-weight: bold;">Số lượng &nbsp &nbsp</p>
            <input type="number" min="0" value="1">
            <p style="color: red;"Chọn số lượng></p>
          </div>
          <div class="product-content-right-product-publisher">
            <p>Chi tiết:</p>
            <br>
            <p><?=$info[0]['mota']?></p>
            <br><br>
          </div>
          <div class="product-content-right-icon-item">
            <button><i class="fas fa-shopping-cart"></i><p>Mua hàng</p></button>
          </div>
        </div>
      </div>
    </div>
</section>  
<?php
}
?>

<!-- <section class="category">
  <div class="container">
    <div class="row">
      <div class="category-left">
          <ul>
            <?php
              foreach ($dsdm as $dm){
                echo '<li class="category-left-li"><a href="index.php?act=sanpham&iddm='.$dm['id_danhmuc'].'">'.$dm['tendanhmuc'].'</a></li>';
              }
            ?>
          </ul>
      </div>
      <div class="category-right row">
        <div class="product-content-left">
          <div class="product-content-left-big-img">
            <img src="images/sp1.jpg" alt="">
          </div>
        </div>
        <div class="product-content-right">
          <div class="product-content-right-product-name">
            <h1>Thám Tử Lừng Danh Conan - Tập 3</h1>
          </div>
          <div class="product-content-right-product-price">
            <h3>25.000<sup>đ</sup></h3>
          </div>
       
          <div class="product-content-right-product-publisher">
            <p>Nhà xuất bản: <span>Kim Đồng</span></p>
            <br>
            <p>Tác giả: <span>Aoyama Gosho</span></p>
          </div>
          <div class="quantity">
            <p style="font-weight: bold;">Số lượng &nbsp &nbsp</p>
            <input type="number" min="0" value="1">
            <p style="color: red;"Chọn số lượng></p>
          </div>
          <div class="product-content-right-product-publisher">
            <p>Chi tiết:</p>
            <br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est magni, autem iusto enim provident aspernatur doloribus repellendus amet consequatur quo molestiae recusandae facilis earum cumque quae, accusamus, culpa nobis at!</p>
            <br><br>
          </div>
          <div class="product-content-right-icon-item">
            <button><i class="fas fa-shopping-cart"></i><p>Mua hàng</p></button>
          </div>
        </div>
      </div>
    </div>
</section>   -->