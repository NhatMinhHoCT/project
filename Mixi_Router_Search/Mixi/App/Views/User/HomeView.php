<?php require_once "HeaderView.php"; ?>
<?php 

$dssp_view = $data["View_Product"];
$homepage=new App\Models\ProductModel;
$html_dssp_view=$homepage->show_products($dssp_view);


$dssp_new = $data["New_Product"];
$homepage=new App\Models\ProductModel;
$html_dssp_new=$homepage->show_products($dssp_new);
?>

<div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">LAZY THINK <em>COLLECTION</em></span>
          <h2>Lười suy nghĩ!<br>Bạn đã sản sàng để__</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">BAD RABBIT F/W <em>2023</em></span>
          <h2>Nhanh Lên!<br>Hãy chọn cho mình một bộ sưu tập</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">MAKE YOUR, <em> STYLE</em></span>
          <h2>Tạo phong cách của bạn</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
          <h6>| TOP SẢN PHẨM YÊU THÍCH</h6>
            <h2>Sản phẩm nổi bật</h2>
          </div>
        </div>
      </div>
      <div class="row">
      <?=$html_dssp_view?>
        
      </div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Ưu Đãi</h6>
            <h2>Mừng Tết Đầu Năm</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="Public/template/assets/images/banner.png" alt="">
            <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Bộ sưu tập</h6>
            <h2>F/W Thời Trang 2023!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Áo Thun</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Quần</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Áo Khoác</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                        <li>
                            <h5>BAD & LAZY BABY TEE - COLOUR COFFEE</h5>
                            <br>
                            <h6>FORM BABY TEE</h6> 
                          </li>
                          <li><h5>GIÁ: 360.000 VND</h5></li>
                          <li><h5>SIZE</h5>
                              <br>
                              <button type="button" class="size-button" value="S">S</button>
                              <button type="button" class="size-button" value="M">M</button>
                              
                            </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="Public/template/assets/images/FW.png" alt="BAD & LAZY BABY TEE - COLOUR COFFEE" style="max-width: 550px;">
                    </div>
                    <div class="col-lg-3">
                      <h4>Đặc trưng:</h4>
                      <p>/ LAZY THINK COLLECTION | FALL - WINTER 2023 / <br>
                        • Chất liệu: Cotton <br>
                        • Size : S, M <br>
                        • Kỹ thuật: In</p><br>
                        <div class="icon-button">
                        <a href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                        <li>
                            <h5>BADHABITS PARACHUTE - BROWN</h5>
                            <br>
                            <h6>FORM OVERSIZE</h6> 
                          </li>
                          <li><h5>GIÁ: 690.000 VND</h5></li>
                          <li><h5>SIZE</h5>
                              <br>
                              <button type="button" class="size-button" value="S">S</button>
                              <button type="button" class="size-button" value="M">M</button>
                              <button type="button" class="size-button" value="L">L</button>
                              <button type="button" class="size-button" value="XL">XL</button>
                            </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="Public/template/assets/images/FW1.png" alt="" style="max-width: 550px;" >
                    </div>
                    <div class="col-lg-3">
                      <h4>Đặc trưng:</h4>
                      <p> / LAZY THINK COLLECTION | FALL - WINTER 2023 / <br>
                          • Chất liệu: Dù (100% Nylon) <br>
                          • Size: S, M, L, XL <br>
                          • Kỹ thuật: Thêu</p>
                      <div class="icon-button">
                      <a href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table ">
                        <ul>
                          <li>
                            <h5>TOO LAZY TO WEAR JACKET JEANS</h5>
                            <br>
                            <h6>FORM OVERSIZE</h6> 
                          </li>
                          <li><h5>GIÁ: 900.000 VND</h5></li>
                          <li><h5>SIZE</h5>
                              <br>
                              <button type="button" class="size-button" value="M">M</button>
                              <button type="button" class="size-button" value="L">L</button>
                              <button type="button" class="size-button" value="XL">XL</button>
                            </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="Public/template/assets/images/jaketrabit01.png" alt="TOO LAZY TO WEAR JACKET JEANS" style="max-width: 550px;" >
                    </div>
                    <div class="col-lg-3">
                      <h4>Đặc trưng:</h4>
                      
                      <p>
                          / LAZY THINK COLLECTION | FALL - WINTER 2023 / <br>
                          • Chất liệu: Jeans <br>
                          • Size: M, L, XL <br>
                          • Kỹ thuật: Wash và Bắn Laser</p>
                      <div class="icon-button">
                        <a href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Bộ sưu tập cơ bản</h6>
            <h2>Sản phẩm bán chạy</h2>
          </div>
        </div>
      </div>
      <div class="row">
      <?=$html_dssp_new?>
      </div>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| LIÊN HỆ</h6>
            <h2>LIÊN HỆ VỚI CÔNG TY CỦA CHÚNG TÔI</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4435924065215!2d106.62525347588416!3d10.85382635775958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1704943386663!5m2!1svi!2s" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="Public/template/assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>0357397611<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="Public/template/assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>info@rabit.com<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Họ & Tên</label>
                  <input type="name" name="name" id="name" placeholder="Tên của bạn..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email </label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Chủ đề</label>
                  <input type="subject" name="subject" id="subject" placeholder="Chủ đề..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Tin nhắn</label>
                  <textarea name="message" id="message" placeholder="Tin nhắn của bạn..."></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Gửi</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php require_once "FooterView.php"; ?>