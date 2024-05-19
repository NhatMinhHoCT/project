<?php
include "header.php";
$page_title = "sanpham";
include "navside.php";
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
include "../controller/ProductController.php";
$product = new ProductController;
$row = $product->getProduct();
//  
// foreach ($row as $data) {
//   var_dump($data);
// }
// var_dump($row->name);
// var_dump($_SESSION['previous_url']);
?>



<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">

    <div class="col-12">
      <div class="rounded h-100 p-4">
        <a href="manwatchmanageadd.php" class="btn btn-outline-primary mb-3" name="themmoi" id="themmoi">Thêm mới</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Thương hiệu</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Số lượng tồn kho</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($row as $data) {
                switch ($data->idSupplier) {
                  case '1':
                    $brand = "Casio";
                    break;
                  case '2':
                    $brand = "Skagen";
                    break;
                  case '3':
                    $brand = "Tissot";
                    break;
                  case '4':
                    $brand = "Halminton";
                    break;
                  case '5':
                    $brand = "Calvin Klein";
                    break;

                  default:
                    # code...
                    break;
                }
              ?>
                <tr>
                  <td class="py-5">1</td>
                  <th scope="row">
                    <div class="d-flex align-items-center mt-2">
                      <img src="../include/upload/<?php echo $data->image ?>" class="img-fluid" style="width: 60px; height: 90px;" alt="">
                    </div>
                  </th>
                  <td class="py-5"><?php echo $data->name ?></td>
                  <td class="py-5"><?php echo $brand ?></td>
                  <td class="py-5"><?php echo number_format($data->price, 0, '', ',') ?> vnđ</td>
                  <td class="py-5">10</td>
                  <td>
                    <span class="badge bg-secondary mt-4">Limited</span><br />
                    <span class="badge bg-danger">Bestseller</span>
                  </td>
                  <td class="py-5">
                    <a href="manwatchdetail.php?id='.<?php echo $data->idProduct ?>.'" class="btn btn-md bg-success border" title="Chi tiết">
                      <i class="fa fa-pen text-light "></i>
                    </a>
                    <a href="manwatchdetail.php?deleteid='.<?php echo $data->idProduct ?>.'" class="btn btn-md bg-danger border" title="Xóa">
                      <i class="fa fa-trash text-light"></i>
                    </a>
                  </td>
                </tr>
              <?php
              }
              ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="pagination d-flex justify-content-center mt-5">
        <a href="#" class="rounded">&laquo;</a>
        <a href="#" class="active rounded">1</a>
        <a href="#" class="rounded">2</a>
        <a href="#" class="rounded">3</a>
        <a href="#" class="rounded">4</a>
        <a href="#" class="rounded">5</a>
        <a href="#" class="rounded">6</a>
        <a href="#" class="rounded">&raquo;</a>
      </div>
    </div>
  </div>
</div>

<!-- Table End -->


<?php
include "footer.php"
?>