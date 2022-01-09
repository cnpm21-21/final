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
                                <h3 class="card-title">Add new timeslot</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="add.php" role="form" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="timeslot">Time slot</label>
                                        <input type="text" class="form-control" name="timeslot" id="timeslot" placeholder="Enter a time">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="add_time" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>