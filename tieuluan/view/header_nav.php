 <?php
  session_start();
  if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_unset();
    session_destroy();
    header("Location: index.php");
  }

  ?>

 <!-- Navbar start -->
 <div class="container-fluid fixed-top">
   <div class="container px-0">
     <nav class="navbar navbar-light bg-white navbar-expand-xl">
       <a href="index.php" class="navbar-brand">
         <h1 class="text-primary display-6">EWatch</h1>
       </a>
       <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="fa fa-bars text-primary"></span>
       </button>
       <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
         <div class="navbar-nav mx-auto">
           <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
           <a href="productwatch.php" class="nav-item nav-link">Đồng hồ Nam</a>
           <a href="womenwatch.php" class="nav-item nav-link">Đồng hồ Nữ</a>
           <a href="couplewatch.php" class="nav-item nav-link">Cặp đôi</a>
           <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
           <!-- <div class="nav-item dropdown">
             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
             <div class="dropdown-menu m-0 bg-secondary rounded-0">
               <a href="cart.html" class="dropdown-item">Cart</a>
               <a href="chackout.html" class="dropdown-item">Chackout</a>
               <a href="testimonial.html" class="dropdown-item">Testimonial</a>
               <a href="404.html" class="dropdown-item">404 Page</a>
             </div>
           </div>
           <a href="contact.html" class="nav-item nav-link">Contact</a> -->
         </div>
         <div class="d-flex m-3 me-0">
           <!-- <button class="btn btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
           <a href="cart.php" class="position-relative me-4 my-auto">
             <i class="fa fa-shopping-bag fa-2x"></i>
             <?php echo (isset($_SESSION['cart']) && $_SESSION['cart'] != null) ? '
             <span class="position-absolute bg-danger rounded-circle d-flex align-items-center justify-content-center text-light px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">
               ' . count($_SESSION['cart']) . '
               <span>' : ''; ?>
           </a>
           <?php if (!isset($_SESSION['user_id'])) {
              echo '<div class="nav-item dropdown">
             <a href="#" class="nav-link" data-bs-toggle="dropdown"><i class="fas fa-user fa-2x"></i></a>
             <div class="dropdown-menu m-0 bg-primary rounded-0">
               <a href="signin.php" class="dropdown-item">Đăng nhập</a>
               <a href="signup.php" class="dropdown-item">Đăng ký tài khoản</a>

             </div>
           </div>';
            } else {
              echo  '<div class="nav-item dropdown">
             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">';
              echo
              isset($_SESSION["avatar"]) ? '<img class="rounded-circle me-lg-2" src="../include/upload/' . $_SESSION["avatar"] . '" alt="" style="width: 40px; height: 40px;">'
                : '<img class="rounded-circle me-lg-2" src="../include/upload/avatardefault_92824.png" alt="" style="width: 40px; height: 40px;">';
              echo '<span class="d-none d-lg-inline-flex">' . $_SESSION['username'] . '</span></a>
             <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
               <a href="account_personal.php" class="dropdown-item">Tài khoản cá nhân</a>
               <a href="account_changepass.php" class="dropdown-item">Đổi mật khẩu</a>
               <a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?logout=1" class="dropdown-item">Thoát</a>
             </div>
           </div>';
            }
            ?>




         </div>
       </div>
     </nav>
   </div>
 </div>

 <!-- Navbar End -->