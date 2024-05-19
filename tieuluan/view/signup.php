<?php
include "header.php";
include "../controller/AccountController.php";
$list = new AccountController();
if (isset($_POST['dangky'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  if ($list->insertData($username, $password, $email)) {
    session_start();
    $_SESSION['notification'] = 1;
    echo '<script>
    window.location.href = "signin.php";
    </script>';
  }
}
?>

<!-- Sign up Start -->
<div class="container-fluid">
  <div class="row h-50 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
      <div class="bg-primary rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <a href="index.html" class="">
            <h3 class="text-light"><i class="fa fa-user-edit me-2"></i>EWatch</h3>
          </a>
          <h3 class="text-light">Đăng ký</h3>
        </div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="Tên tài khoản">
            <label for="username">Tên tài khoản</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
            <label for="password">Mật khẩu</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu">
            <label for="repassword">Nhập lại mật khẩu</label>
          </div>
          <button type="submit" name="dangky" class="btn btn-light py-3 w-100 mb-4">Đăng ký</button>
          <p class="text-center text-light mb-0">Đã có tài khoản? <a href="signin.php" class="text-light fw-bold fs-5 ">Đăng nhập</a></p>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- Sign In End -->
</div>

<!-- JavaScript Libraries -->

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>