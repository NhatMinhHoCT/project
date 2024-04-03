<?php
    session_start();
    include "../func/pdo.php";
    include "../func/user.php";
    if(isset($_POST["login"])){
        $uname=$_POST["uname"];
        $psw=$_POST["psw"];
        $user=checkuser($uname,$psw);
        if(isset($user)&&(is_array($user))&&(count($user)>0)){
            extract($user);
            if($role==1){
                $_SESSION['s_user']=$user;
                header('location: index.php');
            }else{
                $tb="Tài khoản này không có quyền đăng nhập trang quản trị";
            }
        }else{
            $tb="Tài khoản này không tồn tại.";
        }
        
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="layout/assets/css/main.css">
</head>
<body>
  <div class="boxcenter">
    <form action="login.php" method="post">
      <div class="imgcontainer">
        <img src="../layout/images/avatar.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Nhập Username" name="uname" required>

        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập Password" name="psw" required>
      <?php
          if(isset($tb)&&($tb!="")){
              echo "<h3 style='color:red'>".$tb."</h3>";
          }
      ?>
        <button type="submit" name="login">ĐĂNG NHẬP</button>  
      </div>
    </form>
  </div>
</body>
</html>
