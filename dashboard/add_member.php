<?php 
include("header.php") ;
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
                                <h3 class="card-title">Add new member</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="add.php" role="form" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="userFirstname">First name</label>
                                        <input type="text" class="form-control" name="userFirstname" id="userFirstname" placeholder="Enter First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userLastname">Last name</label>
                                        <input type="text" class="form-control" name="userLastname" id="userLastname" placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail">Email address</label>
                                        <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="userContact">Contact number</label>
                                        <input type="number" class="form-control" name="userContact" id="userContact" placeholder="Enter contact number" required>
                                    </div>
                                    <!-- Date -->
                                    <div class="form-group">
                                        <label for="userDob">Date of Birth</label>
                                        <input type="date" class="form-control" name="userDob" id="userDob" placeholder="Pick a day" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userGender">Gender</label>
                                        <select class="form-control" name="userGender" id="userGender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <!-- select from db -->
                                    <?php
                                    require_once("connect_db.php");
                                    $sql = 'SELECT * FROM trainer';
                                    $sql1 = 'SELECT * FROM timeslote';
                                    $sql2 = 'SELECT * FROM package';

                                    $res = connection()->query($sql);
                                    $res1 = connection()->query($sql1);
                                    $res2 = connection()->query($sql2);
                                    ?>

                                    <!-- time slot -->
                                    <div class="form-group">
                                        <label for="userTime">Time Slote</label>
                                        <select class="form-control" name="userTime" required>
                                            <option value="" disabled selected hidden>--Please choose an option--</option>
                                            <?php
                                            while ($row = $res1->fetch_assoc()) {  ?>
                                                <option value="<?= $row['timeslote_id'] ?>">
                                                    <?= $row['timeslote_time'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <!-- trainer -->
                                    <div class="form-group">
                                        <label for="userTrainer">Trainer Name</label>
                                        <select class="form-control" name="userTrainer" required>
                                            <option value="" disabled selected hidden>--Please choose an option--</option>
                                            <?php
                                            while ($row = $res->fetch_assoc()) {  ?>
                                                <option value="<?= $row['trainer_id'] ?>">
                                                    <?= $row['trainer_fname'] . ' ' . $row['trainer_lname'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <!-- packages -->
                                    <div class="form-group">
                                        <label for="">Package</label>
                                        <select class="form-control" name="userPackage" required>
                                            <option value="" disabled selected hidden>--Please choose an option--</option>
                                            <?php while ($row = $res2->fetch_assoc()) {  ?>
                                                <option value="<?= $row['package_id'] ?>">
                                                    <?= $row['package_name'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <!-- address -->
                                    <div class="form-group">
                                        <label for="userAddress">Address</label>
                                        <textarea class="form-control" rows="3" name="userAddress" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
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