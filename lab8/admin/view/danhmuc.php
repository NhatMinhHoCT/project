<div class="main">
  <h2>DANH MỤC</h2>
  <form action="index.php?act=adddm" method ="post">
    <input type="text" name="tendm" id="">
    <input type="submit" name="themmoi" value="Thêm mới">
  </form>
  <br>
  <table class="content-table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
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
                  <td>'.$dm['tendanhmuc'].'</td>
                  <td><a href="index.php?act=updatedm&id='.$dm['id_danhmuc'].'">Sửa</a>&nbsp|&nbsp<a href="index.php?act=deldm&id='.$dm['id_danhmuc'].'">Xóa</a></td>
                </tr>';
                $i++;
        }
      }
    ?>
  </tbody>
  </table>
</div>