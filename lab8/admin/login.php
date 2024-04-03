<?php
  session_start();
  ob_start();
  include "model/connectdb.php";
  include "model/user.php";
  if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $Access=checkuser($user,$pass);
    $_SESSION['Access_authority']=$Access;
    if($Access==1) header('location: index.php');
    else {
      $txt_error="Username hoặc Password không đúng";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../view/style.css">
</head>
<body>
<div class="main">
<section class="loginbox">
    <div class="loginform">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="post">
      
        <div class="container">
          
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>
            <br>  
          <input id="dangnhap" type="submit" name="dangnhap" value="Đăng nhập"></input>
          <label>
          <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
          </label>
        </div>
        <?php
      if(isset($txt_error)&&($txt_error!="")){
        echo "<font color='red'>".$txt_error."</font>";
      }
    ?> 
      </form>
    </div>
  </section>


 
</div>
</body>
</html>