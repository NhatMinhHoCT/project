<?php
   $html_dm="";
   foreach ($dsdm as $item) {
      extract($item);
      $html_dm.='<option value="'.$id.'">'.$name.'</option>';
   }
?>
<div class="main-content">
   <h3 class="title-page">
      Thêm sản phẩm
   </h3>
   <div class="box500">
      <form class="addPro" action="index.php?pg=products_add" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Danh mục:</label>
            <select name="iddm" id="iddm">
               <option value="0" selected>... Vui lòng chọn 1 danh mục ...</option>
               <?=$html_dm;?>

            </select>
         </div>
         <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
         </div>
         <div class="form-group">
            <label for="name">Hình:</label>
            <input type="file" name="img" id="img">
         </div>
         <div class="form-group">
            <label for="name">Tên tác giả:</label>
            <input type="text" class="form-control" name="tacgia" id="tacgia" placeholder="Nhập tên tác giả">
         </div>
         <div class="form-group">
            <label for="name">Giá:</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Nhập giá">
         </div>
         <div class="form-group">
            <label for="name">Sản phẩm đặc biệt:</label>
            <input type="checkbox" name="dacbiet" value="1" id="dacbiet">
         </div>


         <div class="form-group">
            <button type="submit" onclick="return kiemtraform()" name="btnadd" class="btn btn-success">Thêm sản phẩm</button>
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
      var img=document.getElementById("img");
      if(img.value==""){
         alert("Bạn phải chọn hình ảnh");
         img.focus();
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