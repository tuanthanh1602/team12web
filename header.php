<html>
<head>
  <title>
    <?php echo $title; ?>
  </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" id="bootstrap-css">
</head>
  <body>
      <nav id="navbar" style="background:green">
          <a href="Home.php">Trang Chủ</a>
          <div class="content">
            	<!-- notification message -->
            	<?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                	<h3>
                    <?php
                    	echo $_SESSION['success'];
                    	unset($_SESSION['success']);
                    ?>
                	</h3>
                </div>
            	<?php endif ?>
              <!-- logged in user information -->
              <?php  if (isset($_SESSION['username'])) : ?>
              	<p>Xin Chào <strong><?php echo $_SESSION['username']; ?></strong></p>
              	<p> <a href="index.php?logout='1'" style="color: red;">Thoát</a> </p>
              <?php endif ?>
          </div>
      </nav>
