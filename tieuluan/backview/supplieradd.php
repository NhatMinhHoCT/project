<?php
include "header.php";
$page_title = "nhacungcap";
include "navside.php";

?>


<!-- Checkout Page Start -->
<div class="container-fluid pb-5">
  <div class="container pb-5">
    <h3>Thêm mới nhà cung cấp</h3>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <div class="col-sm-12 col-xl-8">
        <div class=" rounded h-100 p-4">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nameSupplier" name="nameSupplier" placeholder="Tên nhà cung cấp">
            <label for="nameSupplier">Tên nhà cung cấp</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
            <label for="address">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
            <label for="address">Địa chỉ</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
            <label for="phone">Số điện thoại</label>
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Thông tin nhà cung cấp" id="description" name="description" style="height: 150px;"></textarea>
            <label for="description">Thông tin mô tả</label>
          </div>

          <div class="text-center pt-5">
            <button class="btn btn-primary text-light" id="taomoi" name="taomoi">Tạo mới</button>
            <a href="supplier.php" class="btn btn-secondary text-light">Trở lại</a>

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