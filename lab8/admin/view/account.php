<div class="main">
  <h2>Tài khoản người dùng</h2>
  <br>
  <table class="content-table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Access_authority</th>
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
                  <td>'.$dm['user'].'</td>
                  <td>'.$dm['email'].'</td>
                  <td>'.$dm['address'].'</td>
                  <td>'.$dm['Access_authority'].'</td>
                  <td><a href="index.php?act=delacc&id='.$dm['id_admin'].'">Xóa</a></td>
                </tr>';
                $i++;
        }
      }
    ?>
  </tbody>
  </table>
</div>