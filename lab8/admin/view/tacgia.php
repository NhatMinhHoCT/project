<div class="main">
  <h2>DANH SÁCH TÁC GIẢ</h2>
  <form action="index.php?act=addtg" method ="post">
    <input type="text" name="tentg" id="">
    <input type="text" name="info" id="">
    <input type="submit" name="themmoi" value="Thêm mới">
  </form>
  <br>
  <table class="content-table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên tác giả</th>
        <th>Thông tin tác giả</th>
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
                    <td>'.$dm['tentacgia'].'</td>
                    <td>'.$dm['info'].'</td>
                    <td><a href="index.php?act=updatetg&id='.$dm['id_tacgia'].'">Sửa</a>|<a href="index.php?act=deltg&id='.$dm['id_tacgia'].'">Xóa</a></td>
                  </tr>';
            $i++;
          }
        }
      ?>
    </tbody>
  </table>
</div>
