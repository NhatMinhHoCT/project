<?php
include "header.php";
include "header_nav.php";
if (!isset($_SESSION['username'])) {
  echo "<script>window.location.href='404.php'</script>";
}
?>
<!-- Checkout Page Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <h1 class="mb-4">Thông tin khách hàng</h1>
    <form action="#">
      <div class="row g-5">
        <div class="col-md-12 col-lg-6 col-xl-6">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="form-item w-100">
                <label class="form-label my-3">Tên khách hàng<sup>*</sup></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="form-item w-100">
                <label class="form-label my-3">Số điện thoại<sup>*</sup></label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-item">
            <label class="form-label my-3">Email liên lạc<sup>*</sup></label>
            <input type="text" class="form-control">
          </div>
          <div class="form-item">
            <label class="form-label my-3">Địa chỉ giao hàng <sup>*</sup></label>
            <input type="text" class="form-control" placeholder="Số nhà/đường">
          </div>
          <div class="form-item">
            <label class="form-label my-3">Quận/Huyện<sup>*</sup></label>
            <input type="text" class="form-control">
          </div>
          <div class="form-item">
            <label class="form-label my-3">Thành phố/Tỉnh<sup>*</sup></label>
            <input type="text" class="form-control">
          </div>
          <div class="form-check my-3">
            <input type="checkbox" class="form-check-input" id="Account-1" name="Accounts" value="Accounts">
            <label class="form-check-label" for="Account-1">Create an account?</label>
          </div>
          <hr>
          <div class="form-check my-3">
            <input class="form-check-input" type="checkbox" id="Address-1" name="Address" value="Address">
            <label class="form-check-label" for="Address-1">Ship to a different address?</label>
          </div>
          <div class="form-item">
            <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Ghi chú (không bắt buộc)"></textarea>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-6">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Giá (vnd)</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Thành tiền (vnd)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <div class="d-flex align-items-center mt-2">
                      <img src="../include/img/donghonam10.jpg" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                    </div>
                  </th>
                  <td class="py-5">Đồng hồ Hamilton</td>
                  <td class="py-5">600.000</td>
                  <td class="py-5">1</td>
                  <td class="py-5">600.000</td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="d-flex align-items-center mt-2">
                      <img src="../include/img/donghonam2.jpg" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                    </div>
                  </th>
                  <td class="py-5">Đồng hồ Hamilton</td>
                  <td class="py-5">600.000</td>
                  <td class="py-5">1</td>
                  <td class="py-5">600.000</td>
                </tr>
                <tr>
                  <th scope="row">
                  </th>
                  <td class="py-3"></td>
                  <td class="py-3" colspan="2">
                    <p class="mb-0 text-dark py-3">Thuế VAT</p>
                  </td>
                  <td class="py-3">
                    <p class="mb-0 text-dark">120.000</p>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                  </th>
                  <td class="py-3"></td>
                  <td class="py-3" colspan="2">
                    <p class="mb-0 text-dark py-3">Shipping</p>
                  </td>
                  <td class="py-3">
                    <p class="mb-0 text-dark">20.000</p>
                  </td>
                </tr>
                <!-- <tr>
                  <th scope="row">
                  </th>
                  <td class="py-5">
                    <p class="mb-0 text-dark py-4">Shipping</p>
                  </td>
                  <td colspan="3" class="py-5">
                    <div class="form-check text-start">
                      <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-1" name="Shipping-1" value="Shipping">
                      <label class="form-check-label" for="Shipping-1">Free Shipping</label>
                    </div>
                    <div class="form-check text-start">
                      <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-2" name="Shipping-1" value="Shipping">
                      <label class="form-check-label" for="Shipping-2">Flat rate: $15.00</label>
                    </div>
                    <div class="form-check text-start">
                      <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-3" name="Shipping-1" value="Shipping">
                      <label class="form-check-label" for="Shipping-3">Local Pickup: $8.00</label>
                    </div>
                  </td>
                </tr> -->
                <tr>
                  <th scope="row">
                  </th>
                  <td class="py-5">
                    <p class="mb-0 text-dark text-uppercase py-3">Tổng cộng</p>
                  </td>
                  <td class="py-5"></td>
                  <td class="py-5"></td>
                  <td class="py-5">
                    <div class="py-3 border-bottom border-top">
                      <p class="mb-0 text-dark">$135.00</p>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
            <div class="col-12">
              <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input" id="Transfer-1" name="Transfer" value="Transfer">
                <label class="form-check-label" for="Transfer-1">Thanh toán qua chuyển khoản</label>
              </div>
              <p class="text-start text-dark">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
            </div>
          </div>
          <!-- <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
            <div class="col-12">
              <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input bg-primary border-0" id="Payments-1" name="Payments" value="Payments">
                <label class="form-check-label" for="Payments-1">Check Payments</label>
              </div>
            </div>
          </div> -->
          <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
            <div class="col-12">
              <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input" id="Delivery-1" name="Delivery" value="Delivery">
                <label class="form-check-label" for="Delivery-1">Thanh toán tiền mặt khi nhận hàng</label>
              </div>
            </div>
          </div>
          <!-- <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
            <div class="col-12">
              <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input bg-primary border-0" id="Paypal-1" name="Paypal" value="Paypal">
                <label class="form-check-label" for="Paypal-1">Paypal</label>
              </div>
            </div>
          </div> -->
          <div class="row g-4 text-center align-items-center justify-content-center pt-4">
            <button type="button" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Đặt hàng</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Checkout Page End -->

<?php
include "footer.php";
?>