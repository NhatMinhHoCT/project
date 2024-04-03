<?php require_once "HeaderView.php"; ?>
<div class="properties section">
    <div class="container">
      
      <div class="untree_co-section before-footer-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="site-blocks-table">
                <table class="table" >
                  <thead >
                    <tr>
                      <th class="product-thumbnail">Sản Phẩm</th>
                      <th class="product-name">Tên Sản Phẩm</th>
                      <th class="product-price">Giá</th>
                      <th class="product-quantity">Số Lượng</th>
                      <th class="product-total">Tổng </th>
                      <th class="product-remove">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody >
                    <tr >
                      <td class="product-thumbnail">
                        <img src="Public/template/assets/images/hoodierabit01.png" alt="Image" class="img-fluid" style="max-width: 200px;">
                      </td>
                      <td class="product-name">
                        <h2 class="h5 text-black">Product 1</h2>
                      </td>
                      <td>$49.00</td>
                      <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-black decrease" type="button">−</button>
                          </div>
                          <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-black increase" type="button">+</button>
                          </div>
                        </div>
    
                      </td>
                      <td>$49.00</td>
                      <td><a href="#" class="btn btn-black btn-sm"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
    
          <div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="main-button">
                    <a href="#">Cập nhật giỏ hàng</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="main-button">
                    <a href="<?=BASE_PATH?>product">Tiếp tục mua sắm</a>
                  </div>                
                </div>
              </div>
              
            </div>
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">TỔNG TIỀN</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">$230.00</strong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='<?=BASE_PATH?>checkout'"><strong>THANH TOÁN</strong></button>
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

  <?php require_once "FooterView.php"; ?>