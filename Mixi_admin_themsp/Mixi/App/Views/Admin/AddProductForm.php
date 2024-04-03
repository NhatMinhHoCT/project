<?php require_once "HeaderAdmin.php"; ?>

<?php
  $data=$data["danhmuc_all"];
  $html_danhmuc='';
  foreach ($data as $item) {
    extract($item);
    $html_danhmuc.='<option value="'.$IDDM.'">'.$TenDM.'</option>';
  }
?>

<div class="container-fluid">
        <div class="container">
          <div class="card p-3" style="margin: 0 auto !important; width:600px !important">
            <div class="card-body">
              
              <h5 class="card-title fw-semibold mb-4">Thêm sản phẩm</h5>
              <div class="card mb-0">
                <div class="card-body">
                  <form method="post" action="<?=BASE_PATH?>admin/addproduct" enctype="multipart/form-data">
                    <fieldset>
                      <div class="mb-3">
                        <label for="" class="form-label">Danh mục</label>
                        <select id="iddm" name="iddm" class="form-select">
                            <option value="0">Vui lòng chọn danh mục</option>
                            <?=$html_danhmuc?>
                            <!-- <option value="1">Áo</option>
                            <option value="2">Quần</option>
                            <option value="3">Áo khoác</option> -->
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Tên sản phẩm</label>
                        <input type="text" id="tensp" name="tensp" class="form-control" placeholder="Nhập tên sản phẩm cụ thể">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label>
                        <input type="file" id="hinhanhsp" name="hinhanhsp" class="form-control" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Giá</label>
                        <input type="text" id="giasp" name="giasp" class="form-control" placeholder="Ex: 100000 tương ứng 100.000 vnđ">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Mô tả</label>
                        <input type="text" id="motasp" name="motasp" class="form-control" placeholder="Mô tả ....">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Trạng thái sản phẩm</label>
                        <select id="trangthaisp" name="trangthaisp" class="form-select">
                            <option value="0">Vui lòng chọn</option>
                            <option value="1">Hot</option>
                            <option value="2">New</option>
                            <option value="3">Sale</option>
                        </select>
                      </div>
                      
                      <button type="submit" name="btnaddproduct" class="btn btn-primary">Thêm</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php require_once "FooterAdmin.php"; ?>