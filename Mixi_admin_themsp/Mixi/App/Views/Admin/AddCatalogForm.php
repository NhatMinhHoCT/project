<?php require_once "HeaderAdmin.php"; ?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Thêm danh mục</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?=BASE_PATH?>admin/addcatalog">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Mô tả danh mục</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>


<?php require_once "FooterAdmin.php"; ?>