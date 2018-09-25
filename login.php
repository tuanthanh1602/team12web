


<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body style="background:white">
    <?php include('server.php') ?>
      <form method="post" action="login.php" style="background:white;height:500px">
      	<?php include('errors.php'); ?>

    <div style="margin-top:100px" >
      	<div class="input-group" style="height:100px">
      		<label>Tài Khoản</label>
      		<input type="text" name="username" style="height:100px;font-size:30px">
      	</div>
      	<div class="input-group" style="height:100px">
      		<label>Tài Khoản</label>
      		<input type="password" name="password" style="height:100px;font-size:30px">
      	</div>
      	<div class="input-group">
      		<button type="submit" class="btn" name="login_user">Đăng Nhập</button>
      	</div>

      	<p>
      		Trở thành Thành Viên ?<a href="register.php">Đăng Ký Ngay</a>
      	</p>


    </div>
      </form>
  </body>
</html>
