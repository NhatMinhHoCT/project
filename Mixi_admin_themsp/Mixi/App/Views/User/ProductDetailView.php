<?php require_once "HeaderView.php"; ?>


<?php 

$dssp_SPTT = $data["SPTT_Product"];
$prodetailpage=new App\Models\ProductModel;
$html_dssp_tt_product=$prodetailpage->show_tt($dssp_SPTT);



  extract($data["DetailSP"]);
?>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="index.php">Home</a> /  <?= $TenSP ?></span>
          <h3><?= $TenSP ?></h3>
        </div>
      </div>
    </div>
  </div>

  <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="main-image">
            <img src="<?=BASE_PATH?>Public/template/assets/images/<?= $HinhAnhSP?>" alt="<?= $TenSP ?>">
          </div>
          
          
        </div>
        <div class="col-lg-5">
          <div class="info-table text-center">
            <ul>
              <li>
                
                <h5><?= $TenSP ?></h5><br>
                <h6><?= $HangSP ?></h6>
              </li>
              <li>
                
                <h5>GIÁ: <?= number_format($GiaSP, 0, ',','.')?> VND</h5>
              </li>
              <li>
                
                <h5>SIZE</h5>
                <br>
                <button type="button" class="size-button" value="M">M</button>
                <button type="button" class="size-button" value="L">L</button>
                <button type="button" class="size-button" value="XL">XL</button>
              </li>
              <li>
              <div>
                <button type="button">Thêm Vào Giỏ Hàng</button>
              </div>
                
              </li>
              

            </ul>
            
          </div>
        </div>
        <div class="col-lg-9">
          <div class="main-content">
          
            
            <h4><?= $TenSP ?></h4>
            <p><?= $MotaSP ?></p>
          </div> 
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Best useful links ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does this work ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is Villa the best ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            
            <h2>Sản Phẩm Tương Tự</h2>
          </div>
        </div>
      </div>
      <div class="row">
      <?=$html_dssp_tt_product?>
      </div>
    </div>
  </div>

  <?php require_once "FooterView.php"; ?>