<div class="main">
  <h2>DANH SÁCH NHÀ XUẤT BẢN</h2>
  <form action="index.php?act=addnxb" method ="post">
    <input type="text" name="tennxb" id="">
    <input type="text" name="diachi" id="">
    <input type="submit" name="themmoi" value="Thêm mới">
  </form>
  <br>
  <table class="content-table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên NXB</th>
        <th>Địa chỉ</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody> 
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
    </tbody>

  </table>
</div>
