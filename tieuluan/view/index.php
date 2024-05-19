<?php

include "header.php";
include "header_nav.php";

?>

<!-- Hero Start -->
<div class="container-fluid pt-5">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-md-1 col-lg-1"></div>
      <div class="col-md-10 col-lg-10">
        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active rounded">
              <img src="../include/../include/img/banner1.webp" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
            </div>
            <div class="carousel-item rounded">
              <img src="../include/img/banner2.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- Fruits Shop Start-->
<div class="container-fluid fruite">
  <div class="container">
    <div class="tab-class text-center">
      <div class="row g-4">
        <div class="col-lg-4 text-start">
          <h1>Sản phẩm mới</h1>
        </div>
        <div class="col-lg-8 text-end">
          <ul class="nav nav-pills d-inline-flex text-center mb-5">
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                <span class="text-dark" style="width: 130px;">Tất cả</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                <span class="text-dark" style="width: 130px;">Mới</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                <span class="text-dark" style="width: 130px;">Nổi bật</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                <span class="text-dark" style="width: 130px;">Bán chạy</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                <span class="text-dark" style="width: 130px;">Bản giới hạn</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <a href="productdetail.php">
                    <div class="rounded position-relative fruite-item">
                      <div class="fruite-img">
                        <img src="../include/img/donghonam2.jpg" class="img-fluid w-100 rounded-top" alt="">
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                      <div class="p-4 rounded-bottom text-center">
                        <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                        <p>H77785733</p>
                        <div class="d-flex justify-content-center flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam3.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam6.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam3.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab-3" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab-4" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam3.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Best-seller</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Best-seller</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Best-seller</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam6.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Best-seller</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab-5" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Best-seller</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="../include/img/donghonam5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Limited</div>
                    <div class="p-4 rounded-bottom text-center">
                      <h6>ĐỒNG HỒ NAM HAMILTON VENTURA</h6>
                      <p>H77785733</p>
                      <div class="d-flex justify-content-center flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">600.000 vnd</p>
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
</div>
<!-- Fruits Shop End-->
<!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fas fa-car-side fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Miễn phí vận chuyển</h5>
            <p class="mb-0">Đơn hàng trên 2 triệu</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fas fa-user-shield fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Thanh toán bảo mật</h5>
            <p class="mb-0">Bảo mật thông tin khách hàng</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fas fa-exchange-alt fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>30 ngày đổi trả</h5>
            <p class="mb-0">Hoàn tiền hoặc 1 đổi 1</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fa fa-phone-alt fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Chăm sóc khách hàng</h5>
            <p class="mb-0">Sẵn sàng phản hồi trong vòng 1h</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product Start -->
<?php
include "footer.php";
?>