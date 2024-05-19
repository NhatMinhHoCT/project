<?php
session_start();
?>
<!-- Sidebar Start -->
<div class="sidebar bg-light pe-4 pb-3 py-2">
  <nav class="navbar navbar-dark">
    <a href="index.html" class="navbar-brand mx-4 mb-3">
      <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i></h3>
    </a>
    <!-- <div class="d-flex align-items-center ms-4 mb-4">
      <div class="position-relative">
        <img class="rounded-circle" src="../include/img/456322.webp" alt="" style="width: 40px; height: 40px;">
        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
        </div>
      </div>
      <div class="ms-3">
        <h6 class="mb-0">Nhật Minh</h6>
        <span>Admin</span>
      </div>
    </div> -->
    <div class="navbar-nav w-100">
      <a href="index.php" class="nav-item nav-link <?php echo $page_title == 'trangchu' ? 'active' : '' ?>"><i class="fa fa-tachometer-alt me-2"></i>Trang chủ</a>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle <?php echo $page_title == 'sanpham' ? 'active' : '' ?>" data-bs-toggle="dropdown"><i class="fa fa-clock me-2"></i>Sản phẩm</a>
        <div class="dropdown-menu bg-transparent border-0">
          <a href="manwatchmanage.php" class="dropdown-item"><i class="fa fa-mars me-2"></i>Đồng hồ nam</a>
          <a href="womanwatchmanage.php" class="dropdown-item"><i class="fa fa-venus me-2"></i>Đồng hồ nữ</a>
          <a href="couplewatchmanage.php" class="dropdown-item"><i class="fa fa-venus-mars me-2"></i>Đồng hồ cặp đôi</a>
        </div>
      </div>
      <a href="accountmanagement.php" class="nav-item nav-link <?php echo $page_title == 'taikhoan' ? 'active' : '' ?>"><i class="fa fa-users me-2"></i>Tài khoản</a>
      <a href="ordermanagement.php" class="nav-item nav-link <?php echo $page_title == 'donhang' ? 'active' : '' ?>"><i class="fa fa-shopping-bag me-2"></i>Đơn hàng</a>
      <a href="supplier.php" class="nav-item nav-link <?php echo $page_title == 'nhacungcap' ? 'active' : '' ?>"><i class="fa fa-table me-2"></i>Nhà cung cấp</a>
      <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
      <!-- <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
        <div class="dropdown-menu bg-transparent border-0">
          <a href="signin.html" class="dropdown-item">Sign In</a>
          <a href="signup.html" class="dropdown-item">Sign Up</a>
          <a href="404.html" class="dropdown-item">404 Error</a>
          <a href="blank.html" class="dropdown-item">Blank Page</a>
        </div>
      </div> -->
    </div>
  </nav>
</div>
<!-- Sidebar End -->

<!-- Content Start -->
<div class="content">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand navbar-dark sticky-top px-4 py-2 bg-light">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
      <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
      <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
      <input class="form-control border-1" type="search" placeholder="Search">
      <button id="timkiem" class="btn btn-primary mx-2" name="timkiem"><i class="fa fa-search text-light"></i></button>
    </form>
    <div class="navbar-nav align-items-center ms-auto">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link" data-bs-toggle="dropdown">
          <i class="fa fa-bell fa-2x"></i>
          <span class="position-absolute bg-danger rounded-circle d-flex align-items-center justify-content-center text-light px-1" style="top: 0px; left: 50px; height: 20px; min-width: 20px;">3</span>

          <!-- <i class="fa fa-bell me-lg-2"></i>
          <span class="d-none d-lg-inline-flex">Thông báo</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-end  border-0 rounded-0 rounded-bottom m-0">
          <a href="#" class="dropdown-item">
            <h6 class="fw-normal mb-0">Profile updated</h6>
            <small>15 minutes ago</small>
          </a>
          <hr class="dropdown-divider">
          <a href="#" class="dropdown-item">
            <h6 class="fw-normal mb-0">New user added</h6>
            <small>15 minutes ago</small>
          </a>
          <hr class="dropdown-divider">
          <a href="#" class="dropdown-item">
            <h6 class="fw-normal mb-0">Password changed</h6>
            <small>15 minutes ago</small>
          </a>
          <hr class="dropdown-divider">
          <a href="#" class="dropdown-item text-center">See all notifications</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img class="rounded-circle me-lg-2" src="../include/img/456322.webp" alt="" style="width: 40px; height: 40px;">
          <span class="d-none d-lg-inline-flex">Nhật Minh</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end  border-0 rounded-0 rounded-bottom m-0">
          <a href="#" class="dropdown-item">Tài khoản của tôi</a>
          <a href="#" class="dropdown-item">Đăng xuất</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->