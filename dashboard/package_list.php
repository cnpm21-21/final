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
                                <h3 class="card-title text-bold">User List</h3>

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
                                            <th>Package Name</th>
                                            <th>Package Price</th>
                                            <th>Package Validity</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once("connect_db.php");
                                        $sql = "SELECT * FROM package";
                                        $res = connection()->query($sql);
                                        // package row
                                        while ($row = $res->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?= $row['package_id'] ?></td>
                                                <td><?= $row['package_name'] ?></td>
                                                <td><?= $row['package_price'] ?></td>
                                                <td><?= $row['package_validity'] ?></td>
                                                <td><a href="edit_package.php?id=<?= $row['package_id'] ?>" class="btn btn-info btn-flat">Edit</a></td>
                                                <td><a onClick="return confirm('Delete This Package?')" href="delete.php?id=<?= $row['package_id'] ?>" class="btn btn-danger btn-flat">Delete</a></td>
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