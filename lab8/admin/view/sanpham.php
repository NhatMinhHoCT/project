<div class="main">
  <?php
    $dsnxb=getall_nxb();
    $dstg=getall_tg();
  ?>
  <h2>SẢN PHẨM</h2>
  <form action="index.php?act=sanpham_add" method ="post" enctype="multipart/form-data">
    <select name="id_danhmuc" id="">
      <option value="0">Chọn danh mục</option>
      <?php
        if(isset($dsdm)){
          foreach($dsdm as $dm){
            echo '<option value="'.$dm['id_danhmuc'].'">'.$dm['tendanhmuc'].'</option>';
          }
        }
      ?>
    </select>
    <select name="id_tacgia" id="">
      <option value="0">Chọn tác giả</option>
      <?php
        if(isset($dstg)){
          foreach($dstg as $tg){
            echo '<option value="'.$tg['id_tacgia'].'">'.$tg['tentacgia'].'</option>';
          }
        }
      ?>
    </select>  
    <select name="id_nxb" id="">
      <option value="0">Chọn nhà xuất bản</option>
      <?php
        if(isset($dsnxb)){
          foreach($dsnxb as $nb){
            echo '<option value="'.$nb['id_nxb'].'">'.$nb['tennxb'].'</option>';
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
    <input type="submit" name="themmoi" value="Thêm mới">
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
