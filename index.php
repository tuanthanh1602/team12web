<?php
  session_start();


  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<title>Trang Chủ</title>
<?php include_once 'header.php'; ?>


 <?php include_once 'footer.php' ?>
