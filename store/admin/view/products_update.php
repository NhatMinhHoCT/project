<?php
   if(is_array($spct)&&(count($spct)>0)){
      extract($spct);
      $idup=$id;
   }
?>
<div class="main-content">
   <h3 class="title-page">
      Cập nhật sản phẩm
   </h3>
   <div class="box500">
      <form class="addPro" action="index.php?pg=products_update" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Danh mục:</label>
            <select name="iddm" id="iddm">
               <option value="0">... Vui lòng chọn 1 danh mục ...</option>
               <?php
                  if(isset($dsdm)){
                     foreach($dsdm as $dm){
                        if($dm['id']==$iddm)
                           echo '<option value="'.$dm['id'].'" selected>'.$dm['name'].'</option>';
                        else
                           echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                     }
                  }
               ?>

            </select>
         </div>
         <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="name" id="name" value="<?=$name?>">
         </div>
         <div class="form-group">
            <label for="name">Hình:</label>
            <input type="file" name="img" id="img">
            <img src="<?=IMG_PATH_ADMIN.$img?>" width=80 alt="">
         </div>
         <div class="form-group">
            <label for="name">Tên tác giả:</label>
            <input type="text" class="form-control" name="tacgia" id="tacgia" value="<?=$tacgia?>">
         </div>
         <div class="form-group">
            <label for="name">Giá:</label>
            <input type="text" class="form-control" name="price" id="price" value="<?=$price?>">
         </div>
         <div class="form-group">
            <label for="name">Sản phẩm đặc biệt:</label>
            <input type="checkbox" name="dacbiet" value="1" id="dacbiet">
         </div>


         <div class="form-group">
            <input type="hidden" name="id" value="<?=$idup?>">
            <button type="submit" onclick="return kiemtraform()" name="btnupdate" class="btn btn-success">Cập nhật sản phẩm</button>
         </div>
         <?php
            if(isset($tb)&&($tb!="")){ echo $tb;}
         ?>
      </form>
   </div>
</div>
<script>
   function kiemtraform(){
      var iddm=document.getElementById("iddm");
      if(iddm.value==0){
         alert("Bạn phải chọn danh mục");
         iddm.focus();
         return false;
      }
      var name=document.getElementById("name");
      if(name.value==""){
         alert("Bạn phải nhập tên");
         name.focus();
         return false;
      }
      var price=document.getElementById("price");
      if((price.value<=0)||(price.value=="")){
         alert("Bạn phải nhập giá là số nguyên dương!");
         price.focus();
         return false;
      }
      
      return true;
   }
</script>