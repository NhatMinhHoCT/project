<?php require_once "HeaderView.php"; ?>

<?php 
 
$dssp_all = $data["All_Product"];
$propage=new App\Models\ProductModel;
$html_dssp_all_product=$propage->show_all_products($dssp_all);

$cata_all = $data["All_Cata"];
$html_dssp_all_cata="";
foreach ($cata_all as $item) {
    extract($item);
    $href=BASE_PATH.'product/idcatalog/'.$IDDM; 
    $html_dssp_all_cata.='
        
        <li>
          <a  href="'.$href.'" data-filter="*">'.$TenDM.'</a>
        </li>
    
    ';
}

?>
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="index.php">Trang chủ</a> / 
            <?php 
            if($titlepage!="") echo $titlepage;
            else echo "Rabit Vivu";
            ?>
        </span>

          <h3>
            <?php 
            if($titlepage!="") echo $titlepage;
            else echo "Rabit Vivu";
            ?>
        </h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
        <a  href="<?=BASE_PATH?>product" data-filter="*">Tất cả</a>
        </li>
        <?=$html_dssp_all_cata ?>
      </ul>
      <div class="row properties-box">
      <?=$html_dssp_all_product?>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="<?=BASE_PATH?>product/sotrang/1">1</a></li>
            <li><a href="<?=BASE_PATH?>product/sotrang/2">2</a></li>
            <li><a href="<?=BASE_PATH?>product/sotrang/3">3</a></li>
            <li><a href="#">></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php require_once "FooterView.php"; ?>