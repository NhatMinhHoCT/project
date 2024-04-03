<div class="main">
  <h2>SẢN PHẨM</h2>
  <form action="index.php?act=updatesp" method ="post" enctype="multipart/form-data">
    <select name="id_danhmuc" id="">
      <option value="0">Chọn danh mục</option>
      <?php
        $iddm=$sp1[0]['id_danhmuc'];
        if(isset($dsdm)){
          foreach($dsdm as $dm){
            if($dm['id_danhmuc']==$iddm)
              echo '<option value="'.$dm['id_danhmuc'].'"selected>'.$dm['tendanhmuc'].'</option>';
            else
            echo '<option value="'.$dm['id_danhmuc'].'">'.$dm['tendanhmuc'].'</option>';
           
          }
          
        }
      ?>
    </select>
    <select name="id_tacgia" id="">
      <option value="0">Chọn danh mục</option>
      <?php
        $idtg=$sp1[0]['id_tacgia'];
        if(isset($dstg)){
          foreach($dstg as $tg){
            if($tg['id_tacgia']==$idtg)
              echo '<option value="'.$tg['id_tacgia'].'"selected>'.$tg['tentacgia'].'</option>';
            else
            echo '<option value="'.$tg['id_tacgia'].'">'.$dm['tentacgia'].'</option>';
           
          }
          
        }
      ?>
    </select>
    <select name="id_nxb" id="">
      <option value="0">Chọn nhà xuất bản</option>
      <?php
        $idtg=$sp1[0]['id_nxb'];
        if(isset($dsnxb)){
          foreach($dsnxb as $nb){
            if($nb['id_nxb']==$idtg)
              echo '<option value="'.$dm['id_nxb'].'"selected>'.$dm['tennxb'].'</option>';
            else
            echo '<option value="'.$dm['id_nxb'].'">'.$dm['tennxb'].'</option>';
           
          }
          
        }
      ?>
    </select>
    <br><br>
    <label for="tensach"><b>Tên sách</b></label>
    <input type="text" name="tensach" id="">
    <label for="anhsach"><b>Chọn ảnh sách</b></label>
    <input type="file" name="anhsach" id="">
    <br><br>
    <label for="mota"><b>Nhập mô tả</b></label>
    <input type="text" name="mota" id="">
    <label for="giaban"><b>Nhập giá</b></label>
    <input type="text" name="giaban" id="">    
    <input type="submit" name="capnhat" value="Cập nhật">
  </form>
  <br>
  <table>
    <tr>
      <th>STT</th>
      <th>Tên sách</th>
      <th>Hình ảnh</th>
      <th>Mô tả</th>
      <th>Giá bán</th>
      <th>Hành động</th>
    </tr>
<?php
  if(isset($kq)&&(count($kq)>0)){
    $i=1;
    foreach($kq as $dm){
      echo '<tr>
              <td>'.$i.'</td>
              <td>'.$dm['tensach'].'</td>
              <td><img src="'.$dm['anhsach'].'" width="80px"></td>
              <td>'.$dm['mota'].'</td>
              <td>'.$dm['giaban'].'</td>
              <td><a href="index.php?act=updatesp&id='.$dm['id_sach'].'">Sửa</a>|<a href="index.php?act=delsp&id='.$dm['id_sach'].'">Xóa</a></td>
           </tr>';
            $i++;
    }
  }
?>
  </table>
</div>
