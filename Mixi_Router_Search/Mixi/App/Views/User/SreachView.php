<?php require_once "HeaderView.php"; ?>

<?php 
 
$dssp_search = $data["Search_Product"];
$searchpage=new App\Models\ProductModel;
$html_dssp_search=$searchpage->show_all_products($dssp_search);

?>


<div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
          <h6>
            Kết quả tìm kiếm :
            "<?=$_POST['keyword']?>"
          </h6>
          </div>
        </div>
      </div>
      <div class="row">
      <!-- <?=$html_dssp_search?> -->
        
      </div>
    </div>
  </div>


<?php require_once "FooterView.php"; ?>