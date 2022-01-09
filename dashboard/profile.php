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
                                <h3 class="card-title">Admin profile</h3>
                            </div>

                            <?php
                            require_once 'connect_db.php';
                            $sql = "SELECT * FROM admin";
                            $res = connection()->query($sql);

                            ?>

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="update.php" role="form" method="post" enctype="multipart/form-data">
                                <?php while ($row = $res->fetch_assoc()) { ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                        <input type="hidden" class="form-control" name="admin_id" value="<?= $row['admin_id'] ?>" required>
                                            <label for="admin_name">Admin name</label>
                                            <input type="text" class="form-control" name="admin_name" id="admin_name" value="<?= $row['admin_name'] ?>" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="admin_email">Email</label>
                                            <input type="email" class="form-control" name="admin_email" id="admin_email" value="<?= $row['admin_email'] ?>" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="admin_contact">Contact</label>
                                            <input type="number" class="form-control" name="admin_contact" id="admin_contact" value="<?= $row['admin_contact'] ?>" placeholder="Enter contact">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Profile Picture</label> <br>
                                            <input type="file" name="admin_picture">
                                            <input type="hidden" name="admin_oldgpic" value="<?php echo $row['admin_picture'] ?>">
                                            <img name="" src="../img/<?= $row['admin_picture'] ?>" class="img-circle" alt="User Image" style="width: 200px;padding: 34px;height: 200px;">
                                        </div>

                                    </div>
                                <?php } ?>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="admin_update" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>
    <script>
        $(function() {
            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });
        })
    </script>