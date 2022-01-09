<?php
session_start();

require_once("./dashboard/connect_db.php");
if (isset($_SESSION['username'])) {
	header('Location: dashboard/home.php');
	exit();
}

// LOGIN USER
$user = "";
$pass = "";
$error = "";

// xử lí login
if (isset($_POST['username']) && isset($_POST['password'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if (empty($user)) {
		$error = 'Vui lòng nhập tên đăng nhập';
	} else if (empty($pass)) {
		$error = 'Vui lòng nhập mật khẩu';
	} else {
		$conn = connection();
		$sql = "SELECT * FROM admin WHERE admin_name='$user' AND admin_password='$pass'";
		$res = $conn->query($sql);

		if ($res->num_rows == 1) {
			$_SESSION['username'] = $user;
			$_SESSION['success'] = "You are now logged in";
			header('location: dashboard/home.php');
		}else {
			$error = 'Invalid user or password';
		}

	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page bg-image"
        style="background-image: url('http://localhost/cnpm/img/login_bg.jpg');background-size: cover; background-position: center;">
    <div class="login-box">
        <div class="login-logo">
            <a href="login.php" class="text-white text-bold">DXT GYM</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" value="<?= $user ?>" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" value="<?= $pass ?>" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <!-- /.col -->
                        <button type="submit" name="login" class="col-4 btn btn-primary btn-block">Sign In</button>
                        <!-- /.col -->
                    </div>
                    <?php 
                        if(!empty($error)){
                            echo "<p class='alert alert-danger my-4'>$error</p>";
                        }
                    ?>
                    
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
</body>

</html>