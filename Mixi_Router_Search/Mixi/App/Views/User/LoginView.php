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
    <div class="contact-page section">
      <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          
            <form action="" method="post" id="contact-form">
              <div class="row">
              <div class="col-lg-12">
                <fieldset>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
                </div>
                <div class="col-lg-12">
                <fieldset>
                <label for="password">Mật Khẩu</label>
                <input type="password" name="password" id="password" placeholder="Mật Khẩu..." autocomplete="on" required>
                <div class="col-lg-12">
                <fieldset>
                <button type="submit" name="login" class="orange-button">Đăng nhập</button>
                </fieldset>
              </div>
              </div>
              <p>Bạn chưa có tài khoản! <a href="<?=BASE_PATH?>signin"> <strong>Đăng ký</strong> </a></p>
            </form>
        </div>
        <?php if(isset($_SESSION['loidn'])): ?>
          <p><?=$_SESSION['loidn']?></p>
          <?php endif; unset($_SESSION['loidn']); ?>
      </div>
      </div>
    </div>
  </div>
  </div>
<?php require_once "FooterView.php"; ?>
