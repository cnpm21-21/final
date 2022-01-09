<?php 
include("header.php");
require_once("check_session.php");
?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("navbar.php") ?>
        <div class="content-wrapper">
            <div class="container">
                <div class="row my-4">
                    <div class="col-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit package</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php 
                            $package_id = $_REQUEST['id'];
                            require_once 'connect_db.php';
                            $sql = "SELECT * FROM package where package_id = '$package_id'";
                            $res = connection()->query($sql);
                            
                            ?>
                            <form action="update.php" role="form" method="post">
                                <?php while($row = $res->fetch_assoc()) {?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="packageName">Package name</label>
                                        <input type="hidden" class="form-control" name="package_id" value="<?= $row['package_id'] ?>" required>
                                        <input type="text" class="form-control" value="<?= $row['package_name'] ?>" name="packageName" id="packageName" placeholder="Enter Package Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="packagePrice">Package price</label>
                                        <input type="number" class="form-control" value="<?= $row['package_price'] ?>" name="packagePrice" id="packagePrice" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Package Validay</label>
                                            <select class="form-control" name="package_validity" required>
                                                <option value="30">One Month</option>
                                                <option value="60">Two Month</option>
                                                <option value="90">Three Month</option>
                                                <option value="180">Six Month</option>
                                                <option value="360">One Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="edit_package" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>
