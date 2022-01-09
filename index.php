<?php 
session_start();

// kiểm tra session, nếu có thì chuyển về dashboard
if(!isset($_SESSION['username'])){
	header("location: login.php");
}
else {
  	header("location: dashboard/home.php");
}
?>