<?php
   $html_dsuser="";
   foreach ($dsuser as $item) {
      extract($item);
      $del='index.php?pg=user&del='.$id;
      $html_dsuser.='<tr>
               <td>'.$id.'</td>
               <td>'.$username.'</td>
               <td>'.$email.'</td>
               <td>'.$role.'</td>
               <td>
                  
                  <a href="'.$del.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
               </td>
            </tr>';
   }
?>
<div class="main-content">
   <h3 class="title-page">
      Danh sách thành viên website
   </h3>
   
   <div class="d-flex justify-content-start">
      <form action="index.php?pg=user" method="post">
         <input type="text" name="kyw" id="">
         <button type="submit" name="timkiem">Tìm kiếm</button>
      </form>
   </div>
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
            <th>Id</th>
            <th>Tên thành viên</th>
            <th>Email</th>
            <th>Role</th>
         </tr>
      </thead>
      <tbody>
         <?=$html_dsuser;?>
         
      </tbody>
   </table>
</div>
</div>
</div>
