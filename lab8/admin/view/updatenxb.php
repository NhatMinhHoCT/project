<div class="main">
  <h2>CẬP NHẬT DANH SÁCH NHÀ XUẤT BẢN</h2>
  <?php
    //echo var_dump($kqone);
  ?>
  <form action="index.php?act=updatenxb" method="post">
    <input type="text" name="tennxb" id="" value="<?=$kqone[0]['tennxb']?>">
    <input type="text" name="diachi" id="" value="<?=$kqone[0]['diachi']?>">
    <input type="hidden" name="id" value="<?=$kqone[0]['id_nxb']?>">
    <input type="submit" name="capnhat" value="Cập nhật">    
  </form>
  <br>
  <table>
    <tr>
      <th>STT</th>
      <th>Tên nhà xuất bản</th>
      <th>Địa chỉ</th>
      <th>Hành động</th>
    </tr>
    <?php
    if(isset($kq)&&(count($kq)>0)){
    $i=1;
    foreach($kq as $dm){
      echo '<tr>
              <td>'.$i.'</td>
              <td>'.$dm['tennxb'].'</td>
              <td>'.$dm['diachi'].'</td>
              <td><a href="index.php?act=updatenxb&id='.$dm['id_nxb'].'">Sửa</a>|<a href="index.php?act=delnxb&id='.$dm['id_nxb'].'">Xóa</a></td>
            </tr>';
            $i++;
    }
  }
?>
  </table>
</div>