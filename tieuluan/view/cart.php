<?php
include "header.php";
include "header_nav.php";
?>
<!-- Cart Page Start -->
<div class="container-fluid py-5"></div>
<div class="container-fluid py-5">
  <div class="container py-5">

    <!-- <div class="mt-5">
      <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
      <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply Coupon</button>
    </div> -->
    <div class="row g-4 justify-content-center">
      <div class="col-sm-12 col-lg-6 col-xl-9">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Đơn giá</th>
                <th scope="col" class="text-center">Số lượng</th>
                <th scope="col">Tổng cộng</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <?php
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
              $cartItems = $_SESSION['cart'];

              // Calculate the total using array_reduce
              $total = array_reduce($cartItems, function ($carry, $item) {
                return $carry + ((int)$item['price'] * (int)$item['quantity']);
              }, 0);
            ?>
              <tbody>
                <?php foreach ($cartItems as $index => $data) { ?>
                  <tr>
                    <th scope="row">
                      <div class="d-flex align-items-center">
                        <img src="../include/img/donghonam10.jpg" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                      </div>
                    </th>
                    <td>
                      <p class="mb-0 mt-4"><?php echo $data['name'] ?></p>
                    </td>
                    <td>
                      <p class="mb-0 mt-4"><?php echo $data['price'] ?></p>
                    </td>
                    <td>
                      <div class="input-group quantity mt-4" style="width: 100px;">
                        <input type="text" class="form-control form-control-sm text-center border-0" value="<?php echo $data['quantity'] ?>">
                      </div>
        </div>
        </td>
        <td>
          <p class="mb-0 mt-4"><?php echo (int)$data['price'] * (int)$data['quantity'] ?></p>
        </td>
        <td>
          <button class="btn btn-md rounded-circle bg-light border mt-4" onclick="removeFromCart(<?php echo $index; ?>)">
            <i class="fa fa-times text-danger"></i>
          </button>
        </td>
        </tr>
        </tbody>
    <?php
                }
              } else {
                echo '<td colspan=6 class="text-center fs-5 my-5 py-5">Bạn chưa có sản phẩm nào trong giỏ hàng</td>';
              }
    ?>
    </table>
      </div>
    </div>
    <div class="col-sm-12 col-lg-6 col-xl-3">
      <div class="bg-light rounded">
        <div class="p-4">
          <h1 class="display-6 mb-4">Giỏ hàng</h1>
          <div class="d-flex justify-content-between mb-4">
            <h5 class="mb-0 me-4">Thành tiền</h5>
            <p class="mb-0"><?php echo isset($total) ? $total . ' vnd' : '0 vnd'; ?></p>
          </div>
          <div class="d-flex justify-content-between">
            <h5 class="mb-0 me-4">Thuế VAT</h5>
            <div class="">
              <p class="mb-0"><?php echo isset($total) ? $total * 0.1 . ' vnd' : '0 vnd'; ?></p>
            </div>
          </div>

        </div>
        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
          <h5 class="mb-0 ps-4 me-4">Tổng cộng</h5>
          <p class="mb-0 pe-4"><?php echo isset($total) ? $total * 1.1 . ' vnd' : '0 vnd'; ?></p>
        </div>
        <?php
        echo isset($_SESSION['user_id']) ? '<a href="checkout.php" class="btn border-primary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Thanh toán</a>'
          : '<a class="btn border-primary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
  Thanh toán
</a>';
        ?>

      </div>
    </div>
  </div>
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thông báo</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Bạn phải đăng ký tài khoản trước khi thanh toán
      </div>
      <div class="modal-footer">
        <a href="signup.php" type="button" class="btn btn-primary text-light">Đăng ký</a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
      </div>

    </div>
  </div>
</div>
<script>
  function removeFromCart(index) {
    // Create an XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Define the URL to send the request to
    const url = '../controller/CartController.php';

    // Open the request
    xhr.open('POST', url, true);

    // Set the request header for sending form data
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Define the callback function for handling the server response
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Refresh the page or update the cart display
        location.reload();
      }
    };

    // Send the product index to the server
    xhr.send('index=' + encodeURIComponent(index));
  }
</script>

<!-- Cart Page End -->

<?php
include "footer.php";
?>