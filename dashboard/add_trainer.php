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
                                <h3 class="card-title">Add New Trainer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="add.php" role="form" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="trainerFname">First name</label>
                                            <input type="text" class="form-control" name="trainerFname" id="trainerFname" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="trainerLastname">Last name</label>
                                            <input type="text" class="form-control" name="trainerLname" id="trainerLastname" placeholder="Enter Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="trainerEmail" id="trainerEmail" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact number</label>
                                            <input type="number" class="form-control" name="trainerContact" id="trainerContact" placeholder="Enter contact number">
                                        </div>

                                        <!-- address -->
                                        <div class="form-group">
                                            <label for="trainerAddress">Address</label>
                                            <textarea class="form-control" rows="3" name="trainerAddress" placeholder="Enter ..."></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="trainerGender">Gender</label>
                                            <select class="form-control" name="trainerGender" id="trainerGender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>

                                        <!-- select from db -->
                                        <?php
                                        require_once("connect_db.php");
                                        $sql = 'SELECT * FROM timeslote';
                                        $res = connection()->query($sql);
                                        ?>

                                        <!-- time slot -->
                                        <div class="form-group">
                                            <label for="trainerTime">Time Slote</label>
                                            <select class="form-control" name="trainerTime" required>
                                                <option value="" disabled selected hidden>--Please choose an option--</option>
                                                <?php
                                                while ($row = $res->fetch_assoc()) {  ?>
                                                    <option value="<?= $row['timeslote_id'] ?>">
                                                        <?= $row['timeslote_time'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="add_trainer" class="btn btn-primary">Submit</button>
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