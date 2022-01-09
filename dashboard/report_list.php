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
                                <h3 class="card-title text-bold">Report List</h3>

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
                                            <th>Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once("connect_db.php");
                                        $sql = "SELECT * FROM user";
                                        $res = connection()->query($sql);
                                        // user row
                                        while ($row = $res->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?= $row['user_id'] ?></td>
                                                <td><?= $row['user_fname'] . ' ' . $row['user_lname'] ?></td>
                                                <td><?= $row['user_email'] ?></td>
                                                <td><?= $row['user_gender'] ?></td>
                                                <td><a href="user_invoice.php?id=<?php echo $row['user_id'] ?>" class="btn btn-info btn-flat">Invoice</a></td>
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