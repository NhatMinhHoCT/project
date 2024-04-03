<?php require_once "HeaderAdmin.php"; ?>

<?php 
    use App\Models\ProductModel;
    $ProAd=new ProductModel();

    $dssp_admin = $data["sanpham_all"];
    $html_dssp_admin="";
    $i=1;
    
    
    foreach ($dssp_admin as $item) {
        extract($item);
        $herfsp=BASE_PATH.FILE_UPLOAD.$HinhAnhSP;
        $html_dssp_admin.='
            <tr>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">'.$i.'</h6>
                </td>
                <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">'.$TenSP.'</h6>                        
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                      <a href="#"><img style="max-width: 100px; max-height: 100px;" src="'.$herfsp.'" class="card-img-top rounded-3" alt="..."></a>
                    </div>
                </td>
                <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">'.number_format($GiaSP, 0, ',', '.').' </h6>                         
                  </td>
                <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">'.$ProAd->gettrangthai($trangthai).'</h6>                       
                </td>
                <td class="border-bottom-0">
                    ----
                </td>
                <td class="border-bottom-0">
                    Edit | Delete
                </td>
            </tr> 
        ';
        $i++;
    }
?>

<div class="container-fluid">
    
          
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Sản phẩm</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                      <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">STT</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Hình ảnh</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Giá</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Loại</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Danh mục</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Chức năng</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?= $html_dssp_admin ?>
                                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
</div>





<?php require_once "FooterAdmin.php"; ?>