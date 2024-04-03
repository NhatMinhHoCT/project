<section class="dangkybox">
    <div class="dangkyform">
      <form action="index.php?act=dangky" method="post">
      <div class="container">
        <h1>Đăng ký tài khoản</h1>
        <br>
        <p>Vui lòng điền đầy đủ các thông tin bên dưới.</p>
        <hr>
        <label for="username"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Nhập username" name="user" id="username" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Nhập Email" name="email" id="email" required>
        
        <label for="address"><b>Địa chỉ</b></label>
        <input type="text" placeholder="Nhập địa chỉ" name="address" id="address" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Nhập Password" name="pass" id="pass" required>

        <input type="submit" name ="dangky" class="dangky" value="Đăng ký"></input>
      </div>
  
      <div class="container signin">
        <p>Đã có tài khoản? <a href="index.php?act=login">Đăng nhập</a>.</p>
      </div>
        
    </form>
  </div>
</section>

