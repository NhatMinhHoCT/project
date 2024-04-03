<?php require_once "HeaderView.php"; ?>
    <div class="page-heading header-text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <span class="breadcrumb"><a href="index.php">Trang chủ</a> / 
                    <?php 
                    if($titlepage!="") echo $titlepage;
                    else echo "Rabit Vivu";
                    ?>
                </span>

                  <h3>
                    <?php 
                    if($titlepage!="") echo $titlepage;
                    else echo "Rabit Vivu";
                    ?>
                </h3>
                </div>
              </div>
            </div>
    </div>
    <div class="contact-page section">
    <div class="container ">
      <div class="row ">
        <div class="col-lg-3 shadow-lg bg-body-tertiary rounded " >
          <div class="col-lg-12 py-1 " >
              <a href="<?=BASE_PATH?>taikhoancuatoi">
                <div class="p-3 "><i class="fa-solid fa-user me-2 "></i>Tài khoản</div>
              </a>
          </div>
          <div class="col-lg-12 py-1 ">
            <a href="<?=BASE_PATH?>licsumuahang">
              <div class="p-3 "><i class="fa-brands fa-shopify"></i> Lịch sử đơn hàng</div>
            </a>
          </div> 
          <?php if($_SESSION['user']['Role']<1): ?>
            <div class="col-lg-12 py-1  ">
              <a href="<?=BASE_PATH?>admin/dashboard">
                <div class="p-3 "><i class="fa-solid fa-user-tie me-2"></i>Trang quản lý</div>
              </a>
            </div>
                             
          <?php endif; ?>
          <div class="col-lg-12 py-1  ">
            <a href="<?=BASE_PATH?>logout">
              <div class="p-3 "><i class="fa-solid fa-arrow-right"></i> Đăng Xuất</div>
            </a>
          </div>
        </div>
        
        <div class="col-lg-8 ms-3 ">
          <div class="container ms-5 shadow-lg bg-body-tertiary rounded">
              <div class="row">
                
                <h3 class="mt-3 text-center">Tổng quan</h3>
                  <div class="col-lg-4 mt-3 text-center ">
                    <h6>Họ & Tên</h6>
                  </div>
                  <div class="col-lg-4 mt-3 text-center">
                    <h6>Email</h6>
                    <p>Duylam@</p>
                  </div>
                  <div class="col-lg-4  mt-3 text-center">
                    <h6>Nhóm khách hàng</h6>
                  </div>
                
              </div>
              <hr>
              <div class="row">
                  <div class="col-lg-6  mt-2 ">
                    <div class="section-heading">
                    <img class="rounded-circle" src="<?=BASE_PATH?>Public/template/assets/images/baner04.png" alt="logo" style="max-width: 300px;">
                    <input class="mt-5" type="file">
                    </div>
                  </div>
                  <div class="col-lg-6  mt-2">
                    <div class="section-heading">
                    <form action="">
                      <label for="username">UserName</label>
                      <input type="text">
                      <label for="username">UserName</label>
                      <input type="text">
                    </form>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>


    
<?php require_once "FooterView.php"; ?>