<div class="main">
  <h2>CẬP NHẬT DANH SÁCH TÁC GIẢ</h2>
  <?php
    //echo var_dump($kqone);
  ?>
  <form action="index.php?act=updatetg" method="post">
    <input type="text" name="tentacgia" id="" value="<?=$kqone[0]['tentacgia']?>">
    <input type="text" name="info" id="" value="<?=$kqone[0]['info']?>">
    <input type="hidden" name="id" value="<?=$kqone[0]['id_tacgia']?>">
    <input type="submit" name="capnhat" value="Cập nhật">    
  </form>
  <br>
  <table>
    <tr>
      <th>STT</th>
      <th>Tên danh mục</th>
      <th>Thông tin tác giả</th>
      <th>Hiển thị</th>
      <th>Hành động</th>
    </tr>
    <?php
    if(isset($kq)&&(count($kq)>0)){
    $i=1;
    foreach($kq as $dm){
      echo '<tr>
              <td>'.$i.'</td>
              <td>'.$dm['tentacgia'].'</td>
              <td>'.$dm['info'].'</td>
              <td><a href="index.php?act=updatetg&id='.$dm['id_tacgia'].'">Sửa</a>|<a href="index.php?act=deltg&id='.$dm['id_tacgia'].'">Xóa</a></td>
            </tr>';
            $i++;
    }
  }
?>
  </table>
</div>