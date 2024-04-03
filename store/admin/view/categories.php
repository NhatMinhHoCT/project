<?php
   $html_dsdm="";
   foreach ($dsdm as $item) {
      extract($item);
      $del='index.php?pg=categories&del='.$id;
      $html_dsdm.='<tr>
               <td>'.$id.'</td>
               <td>'.$name.'</td>
               <td>
                  
                  <a href="'.$del.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
               </td>
            </tr>';
   }
?>
<div class="main-content">
   <h3 class="title-page">
      Danh mục
   </h3>
   <div class="d-flex justify-content-end">
      <a href="index.php?pg=categories_add" class="btn btn-success mb-2">Thêm danh mục</a>
   </div>
   <div class="d-flex justify-content-start">
      <form action="index.php?pg=categories" method="post">
         <input type="text" name="kyw" id="">
         <button type="submit" name="timkiem">Tìm kiếm</button>
      </form>
   </div>
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
         </tr>
      </thead>
      <tbody>
         <?=$html_dsdm;?>
         
      </tbody>
   </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
new DataTable('#example');
</script>

