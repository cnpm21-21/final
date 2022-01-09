    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="home.php" class="nav-link">Home</a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->


    <!-- navbar bên phải -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="home.php" class="brand-link">
            <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
            <span class="brand-text font-weight-light">DTX Gym</span>
        </a>

        <?php 
        require_once("connect_db.php");
        $res = connection()->query("SELECT admin_picture as pic FROM admin");
        $img = $res->fetch_assoc()['pic'];
        ?>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../img/<?= $img ?>" class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin name</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="home.php" class="nav-link active ">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <p>
                                Member
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="member_list.php" class="nav-link">
                                    <i class="fas fa-list"></i>
                                    <p>Member List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_member.php" class="nav-link">
                                    <i class="fas fa-user-plus"></i>
                                    <p>Add member</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- quản lí gói -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-dumbbell"></i>
                            <p>
                                Packages
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="package_list.php" class="nav-link">
                                    <i class="fas fa-list"></i>
                                    <p>Packages List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_package.php" class="nav-link">
                                    <i class="fas fa-plus"></i>
                                    <p>Add packages</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- quản lí trainer/PT -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-clock"></i>
                            <p>
                                Time slots
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="timeslot_list.php" class="nav-link">
                                    <i class="fas fa-list"></i>
                                    <p>Time slot List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_timeslot.php" class="nav-link">
                                    <i class="fas fa-plus"></i>
                                    <p>Add time slot</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- quản lí trainer/PT -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <p>
                                Trainers
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="trainer_list.php" class="nav-link">
                                    <i class="fas fa-list"></i>
                                    <p>Trainer List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_trainer.php" class="nav-link">
                                    <i class="fas fa-user-plus"></i>
                                    <p>Add trainer</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- profile admin-->
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link">
                            <i class="fas fa-user-cog"></i>
                            <p>Profile</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link">
                            <i class="fas fa-user-cog"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>