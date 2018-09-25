<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng Ký Tài Khoản</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h1 style="color:red"><b><center>Đăng Ký Thành Viên</center></b></h1>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Tên Đăng Nhập</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>"  placeholder="Nhập tên đăng nhập">
  	</div>
  	<div class="input-group">
  	  <label>Địa Chỉ Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Nhập địa chỉ Email">
  	</div>
  	<div class="input-group">
  	  <label>Mật Khẩu</label>
  	  <input type="password" name="password_1" placeholder="Nhập Mật Khẩu">
  	</div>
  	<div class="input-group">
  	  <label>Xác Nhận Mật Khẩu</label>
  	  <input type="password" name="password_2" placeholder="Nhập Lại Mật Khẩu">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Hoàn Thành Đăng Ký</button>
  	</div>
  	<p>
  	Bạn đã có tài khoản ? <a href="login.php"> Đăng Nhập  </a>
  	</p>
  </form>
</body>
</html>
