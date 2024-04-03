<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="'viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title><Bookstore-project></title>
</head>
<body>
  <header>
    <section>
      <nav>
        <div class="logo">
          <img src="images/Bookstorelogo.jpg">
        </div>
        <div class="menu">
          <ul>
            <li><a href="index.php?act=trangchu">Trang chủ</a>
            <li><a href="index.php?act=sanpham&iddm=29">Sách Tiếng Việt</a>
              <ul class="sub-menu">
                <li><a href="">Theo tác giả</a></li>
                <li><a href="">Theo thể loại</a></li>
                <li><a href="">Theo nhà phát hành</a></li>
              </ul>
            </li>
            <li><a href="index.php?act=sanpham&iddm=31">English Books</a>
              <ul class="sub-menu">
                <li><a href="">By Category </a></li>
                <li><a href="">By Publishers</a></li>
                <li><a href="">Bestsellers</a></li>
              </ul>
            </li>
            <li><a href="index.php?act=sanpham&iddm=32">VPP&Học cụ </a></li>
            <li><a href="index.php?act=sanpham&iddm=34">Ưu đãi hot</a></li>
          </ul>
        </div>
        <div class="social_icon">
          <li><input placeholder="Tìm kiếm" type="text" name="kyw"></li>
          <li><a class="fa-solid fa-magnifying-glass" href="index.php?act=timkiem&kyw=$kyw"></a></li>
          <li><a class="fa-solid fa-cart-shopping" href="index.php?act=cart"></a></li>
          <?php
            if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
              echo '<li><a href="index.php?act=userinfo">'.$_SESSION['username'].'</a></li>';
              echo '<li><a href="index.php?act=logout">Đăng xuất</a></li>';
            }else{
          ?>
          <li><a href="index.php?act=login">Đăng nhập</a></li>
          <li><a href="index.php?act=dangky">Đăng ký</a></li>
          <?php
           }
          ?>
        </div>
      </nav>
    </section>
  </header>
  