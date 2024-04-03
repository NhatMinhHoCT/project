<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý </title>
  <link rel="shortcut icon" type="image/png" href="<?=BASE_PATH?>Public/template1/src/assets/images/logos/logoooo.jpg" />
  <link rel="stylesheet" href="<?=BASE_PATH?>Public/template1/src/assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="<?=BASE_PATH?>admin/dashboard" class="text-nowrap logo-img">
            <img src="<?=BASE_PATH?>Public/template1/src/assets/images/logos/logoooo.jpg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Trang chủ</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?=BASE_PATH?>admin/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Thống kê & Tin tức</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Quản lý</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?=BASE_PATH?>admin/category" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Quản lý danh mục</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?=BASE_PATH?>admin/product" aria-expanded="false">
                <span>
                <i class="fa-solid fa-shirt"></i>
                </span>
                <span class="hide-menu">Quản lý sản phẩm</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?=BASE_PATH?>admin/bill" aria-expanded="false">
                <span>
                <i class="fa-solid fa-money-bill-1-wave"></i>
                </span>
                <span class="hide-menu">Quản lý đơn hàng</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Thêm</span>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="<?=BASE_PATH?>admin/addnew" aria-expanded="false">
                <span>
                <i class="fa-solid fa-pen-to-square"></i>
                </span>
                <span class="hide-menu">Thêm mới</span>
              </a>
            </li>
            
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?=BASE_PATH?>Public/template1/src/assets/images/logos/logoooo.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="<?=BASE_PATH?>profile" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Tài khoản</p>
                    </a>
                    <a href="<?=BASE_PATH?>index" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-home fs-6"></i>
                      <p class="mb-0 fs-3">Trang chủ</p>
                    </a>
                    <a href="<?=BASE_PATH?>logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Đăng xuất</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->