<?php 
session_start();

// kiểm tra session, nếu có thì chuyển về dashboard
if(!isset($_SESSION['username'])){
	header("location: dashboard/login.php");
}
else {
  	header("location: dashboard/dashboard.php");
}
?>