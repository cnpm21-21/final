<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font awesome  -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- theme style custom -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <title>Đăng nhập</title>
    <!-- <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 100%;
            }
        }
    </style> -->
</head>

<body>
    <!-- wrapper page -->
    <div class="wrapper">
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row h-100">
                    <div class="col-sm-6 text-black">

                        <div class="px-5 ms-xl-4">
                            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                            <span class="h1 fw-bold mb-0">SSK GYM</span>
                        </div>

                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                            <form style="width: 23rem;">

                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example18">Email address</label>
                                    <input type="email" id="form2Example18" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example28">Password</label>
                                    <input type="password" id="form2Example28" class="form-control form-control-lg" />
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
                                </div>
                            </form>

                        </div>

                    </div>
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img src="../img/login_bg.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>

</html>