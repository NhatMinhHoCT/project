<?php
include "header.php";
$page_title = "taikhoan";
include "navside.php"
?>
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">

    <div class="col-12">
      <div class="rounded h-100 p-4">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">SDT</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-5">1</td>
                <td class="py-5">Nguyễn Văn A</td>
                <td class="py-5">0904.567.789</td>
                <td class="py-5">NVA@gmail.com</td>
                <td class="py-5">Cần Thơ</td>
                <td class="py-5">
                  <a href="" class="btn btn-md bg-success border" title="Chi tiết">
                    <i class="fa fa-pen text-light "></i>
                  </a>
                  <a href="" class="btn btn-md bg-danger border" title="Xóa">
                    <i class="fa fa-trash text-light"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="py-5">1</td>
                <td class="py-5">Nguyễn Văn A</td>
                <td class="py-5">0904.567.789</td>
                <td class="py-5">NVA@gmail.com</td>
                <td class="py-5">Cần Thơ</td>
                <td class="py-5">
                  <a href="" class="btn btn-md bg-success border" title="Chi tiết">
                    <i class="fa fa-pen text-light "></i>
                  </a>
                  <a href="" class="btn btn-md bg-danger border" title="Xóa">
                    <i class="fa fa-trash text-light"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="py-5">1</td>
                <td class="py-5">Nguyễn Văn A</td>
                <td class="py-5">0904.567.789</td>
                <td class="py-5">NVA@gmail.com</td>
                <td class="py-5">Cần Thơ</td>
                <td class="py-5">
                  <a href="" class="btn btn-md bg-success border" title="Chi tiết">
                    <i class="fa fa-pen text-light "></i>
                  </a>
                  <a href="" class="btn btn-md bg-danger border" title="Xóa">
                    <i class="fa fa-trash text-light"></i>
                  </a>
                </td>
              </tr>
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