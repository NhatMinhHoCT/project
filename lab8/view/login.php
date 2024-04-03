  <section class="loginbox">
    <div class="loginform">
      <form action="index.php?act=login" method="post">

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>
            <br>  
          <input id="dangnhap" type="submit" name="login" value="Đăng nhập"></input>
          <label>
          <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Chưa có tài khoản? <a href="#">Đăng ký</a></span>
        </div>
      </form>
    </div>
  </section>
