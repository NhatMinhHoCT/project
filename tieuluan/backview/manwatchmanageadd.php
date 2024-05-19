<?php
include "header.php";
$page_title = "sanpham";
include "navside.php";
include "../controller/ProductController.php";
$product = new ProductController;
if (isset($_POST['taomoi'])) {
  // dong ho nam 
  $kind = 1;

  // du lieu tu form
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $machineType = $_POST['machineType'];
  $color = $_POST['color'];
  $origin = $_POST['origin'];
  $diameter = $_POST['diameter'];
  $watchChain = $_POST['watchChain'];
  $guarantee = $_POST['guarantee'];

  // tao code cho san pham
  $uniqid = uniqid();
  $rand_start = rand(1, 5);
  $code = substr($uniqid, $rand_start, 8);

  // xử lý hình ảnh
  // $preimage = $_FILES['image'];
  $imageName = $_FILES['image']['name'];
  $imageSize = $_FILES['image']['size'];
  $tmpName = $_FILES['image']['tmp_name'];
  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $imageName);
  $imageExtension = strtolower(end($imageExtension));
  if (!in_array($imageExtension, $validImageExtension)) {
    echo '<script>
      alert("Định dạng ảnh không đúng");
      history.go(-1);
    </script>';
  } elseif ($imageSize > 1000000) {
    echo '<script>
      alert("Kích thước ảnh quá lớn");
      history.go(-1);
    </script>';
  } else {
    $image = basename($imageName);
    move_uploaded_file($tmpName, '../include/upload/' . $image);
  }
  if ($image != null) {
    if ($product->insertProduct($name, $code, $brand, $image, $price, $description, $kind, $machineType, $color, $origin, $diameter, $watchChain, $guarantee)) {
      echo '<script>
        alert("Thêm sản phẩm thành công");
        window.location.href = "manwatchmanage.php";
      </script>';
    }
  }
}

?>


<!-- Checkout Page Start -->
<div class="container-fluid pb-5">
  <div class="container pb-5">
    <h3>Thêm mới sản phẩm</h3>
    <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <div class="col-sm-12 col-xl-8">
        <div class=" rounded h-100 p-4">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
            <label for="name">Tên sản phẩm</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select pb-2" id="brand" name="brand" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">Casio</option>
              <option value="2">Skagen</option>
              <option value="3">Tissot</option>
              <option value="4">Halminton</option>
              <option value="5">Calvin Klein</option>
            </select>
            <label for="floatingSelect">Thương hiệu</label>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Chọn hình ảnh</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="price" name="price" placeholder="Giá sản phẩm">
            <label for="price">Giá sản phẩm</label>
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Mô tả sản phẩm" id="description" name="description" style="height: 150px;"></textarea>
            <label for="description">Thông tin mô tả</label>
          </div>
          <div class="form-floating my-3">
            <select class="form-select pb-2" id="machineType" name="machineType" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">Máy cơ tự động</option>
              <option value="2">Máy pin điện tử</option>
              <option value="3">Năng lượng ánh sáng</option>
            </select>
            <label for="machineType">Kiểu máy</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select pb-2" id="color" name="color" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">Trắng</option>
              <option value="2">Đen</option>
              <option value="3">Vàng</option>
              <option value="4">Nâu</option>
              <option value="4">Xám</option>
            </select>
            <label for="color">Màu sắc</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select pb-2" id="origin" name="origin" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">Nhật Bản</option>
              <option value="2">Thụy Sĩ</option>
              <option value="3">Mỹ</option>
              <option value="4">Đan Mạch</option>
            </select>
            <label for="origin">Xuất xứ</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select pb-2" id="diameter" name="diameter" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">Dưới 20mm</option>
              <option value="2">20-30mm</option>
              <option value="3">30-40mm</option>
              <option value="4">Trên 40mm</option>
            </select>
            <label for="diameter">Đường kính</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select pb-2" id="watchChain" name="watchChain" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">Dây kim loại</option>
              <option value="2">Nhựa tổng hợp</option>
              <option value="3">Dây da</option>
              <option value="4">Vải</option>
              <option value="5">Chất liệu khác</option>
            </select>
            <label for="watchChain">Loại dây</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select pb-2" id="guarantee" name="guarantee" aria-label="Floating label select example">
              <option selected disabled></option>
              <option value="1">1 năm</option>
              <option value="2">2 năm</option>
              <option value="3">3 năm</option>
              <option value="4">5 năm</option>
            </select>
            <label for="guarantee">Bảo hành</label>
          </div>
          <div class="text-center pt-5">
            <button class="btn btn-primary text-light" id="taomoi" name="taomoi">Tạo mới</button>
            <a href="<?php echo $_SESSION['previous_url'] ?>" class="btn btn-secondary text-light">Trở lại</a>

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