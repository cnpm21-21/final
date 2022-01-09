<?php include("header.php") ?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("navbar.php") ?>
        <div class="content-wrapper">
            <div class="container">
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-bold">Trainer List</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Contact</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once("connect_db.php");
                                        $sql = "SELECT * FROM trainer";
                                        $res = connection()->query($sql);
                                        // user row
                                        while ($row = $res->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?= $row['trainer_id'] ?></td>
                                                <td><?= $row['trainer_fname'] . $row['trainer_lname'] ?></td>
                                                <td><?= $row['trainer_email'] ?></td>
                                                <td><?= $row['trainer_gender'] ?></td>
                                                <td><?= $row['trainer_contact'] ?></td>
                                                <td><a href="edit_trainer.php?id=<?= $row['trainer_id'] ?>" class="btn btn-info btn-flat">Edit</a></td>
                                                <td><a onClick="return confirm('Delete This Trainer?')" href="delete.php?trainerid=<?= $row['trainer_id'] ?>" class="btn btn-danger btn-flat">Delete</a></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>
    <script>
      function ConfirmDelete() {
        if (confirm("Delete Account?"))
          location.href = 'linktoaccountdeletion';
      }
    </script>