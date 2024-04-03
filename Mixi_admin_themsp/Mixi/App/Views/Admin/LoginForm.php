<?php require_once "HeaderAdmin.php"; ?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">KHU VỰC DÀNH CHO ADMIN</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?=BASE_PATH?>admin/login">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nhập email hoặc username</label>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" >
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                      
                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary">Đăng nhập</button>
                    <?php
                        if(isset($_SESSION['loidnadmin'])) echo $_SESSION['loidnadmin'];
                    ?>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>


<?php require_once "FooterAdmin.php"; ?>