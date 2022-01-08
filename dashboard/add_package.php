<?php include("header.php") ?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("navbar.php") ?>
        <div class="content-wrapper">
            <div class="container">
                <div class="row my-4">
                    <div class="col-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add new package</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="add.php" role="form" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="packageName">Package name</label>
                                        <input type="text" class="form-control" name="packageName" id="packageName" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="packagePrice">Package price</label>
                                        <input type="number" class="form-control" name="packagePrice" id="packagePrice" placeholder="Enter Last Name">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Package Validay</label>
                                            <select class="form-control" name="package_validity">
                                                <option value="30">One Month</option>
                                                <option value="60">Two Month</option>
                                                <option value="90">Three Month</option>
                                                <option value="180">Six Month</option>
                                                <option value="360">One Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="add_package" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>
