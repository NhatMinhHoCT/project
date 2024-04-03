<?php require_once "HeaderAdmin.php"; ?>

<?php 
$dsdm_admin = $data["danhmuc_all"];
$html_dsdm_admin="";
$i=1;
foreach ($dsdm_admin as $item) {
    extract($item);
    
    $html_dsdm_admin.='
            <tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">'.$i.'</h6></td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">'.$TenDM.'</h6>                      
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">'.$MotaDM.'</p>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-primary rounded-3 fw-semibold">Ẩn</span>
                    <span class="badge bg-primary rounded-3 fw-semibold">Hiện</span>
                  </div>
                </td>
                
            </tr> 
    ';
    $i++;
}


?>


<div class="container-fluid">
    <div class="row">
          
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">STT</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tên danh mục</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Mô tả</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Chức năng</h6>
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?= $html_dsdm_admin ?>
                      
                           
                                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<?php require_once "FooterAdmin.php"; ?>