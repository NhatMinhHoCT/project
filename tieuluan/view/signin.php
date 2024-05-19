<?php
include "header.php";
include "../controller/AccountController.php";
$list = new AccountController();
session_start();
if (isset($_SESSION['notification']) && ($_SESSION['notification'] == 1)) {
  echo "<script>
    setTimeout(function() {
      showToast('Hello World', 'This is a test toast', 'info');
    }, 200);
  </script>";

  unset($_SESSION['notification']);
}
if (isset($_POST['dangnhap'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($list->checklogin($username, $password)) {
    header("Location: index.php");
  }
}
?>

<!-- Sign In Start -->
<div class="container-fluid">
  <div class="row h-50 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
      <div class="bg-primary rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <a href="index.html" class="">
            <h3 class="text-light"><i class="fa fa-user-edit me-2"></i>EWatch</h3>
          </a>
          <h3 class="text-light">Đăng nhập</h3>
        </div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập">
            <label for="username">Tên đăng nhập</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
            <label for="password">Mật khẩu</label>
          </div>
          <button type="submit" name="dangnhap" class="btn btn-light py-3 w-100 mb-4">Đăng nhập</button>
          <p class="text-center text-light mb-0">Chưa có tài khoản? <a href="signup.php" class="text-light fw-bold fs-5 ">Đăng ký</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Sign In End -->
</div>
<div id="toast"></div>
<script src="../include/js/main.js"></script>
</body>

</html>