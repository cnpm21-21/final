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
                                <h3 class="card-title">Edit timeslot</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php 
                            $time_id = $_REQUEST['id'];
                            require_once("connect_db.php");
                            $sql = "SELECT * FROM timeslote where timeslote_id = '$time_id' ";
                            $res = connection()->query($sql);
                            
                            ?>

                            <form action="update.php" role="form" method="post">
                                <?php while ($row = $res->fetch_assoc()) {?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="timeslot">Time slot</label>
                                        <input type="hidden" class="form-control" name="time_id" value="<?= $row['timeslote_id'] ?>" required>
                                        <input type="text" class="form-control" value="<?= $row['timeslote_time'] ?>" name="timeslot" id="timeslot" placeholder="Enter a time">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="update_time" class="btn btn-primary">Submit</button>
                                </div>
                                <?php }?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>