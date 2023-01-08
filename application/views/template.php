<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $title ?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- data-table -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- data-table Responsive -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Website icon -->
    <link href="<?= base_url('assets/dist/img/logo.png'); ?>" rel="shortcut icon">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->fungsi->user_login()->username ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('/assets/dist/img/') . $this->fungsi->user_login()->image ?>" height="25" width="25">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= site_url('user/profile') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            My Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= site_url('auth/logout'); ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-danger disabled color-palette elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link text-center">
                <img src="<?= base_url('assets/dist/img/panel-logo.png') ?>" alt="" height="100">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="margin-top: 80px !important;">
                    <div class="image">
                        <img src="<?= base_url('/assets/dist/img/') . $this->fungsi->user_login()->image ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-light"><?= $this->fungsi->user_login()->username ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?> text-light">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->level == 2) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('transaction/sale') ?>" class="nav-link <?= $this->uri->segment(1) == 'transaction' ? 'active' : '' ?> text-light">
                                    <i class="fas fa-money-bill-wave nav-icon"></i>
                                    <p>
                                        Transaksi
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('user/list') ?>" class="nav-link <?= $this->uri->segment(2) == 'list' ? 'active' : '' ?> text-light">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        User
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item has-treeview <?= $this->uri->segment(1) == 'sparepart' ||
                                                                $this->uri->segment(1) == 'service' ||
                                                                $this->uri->segment(1) == 'supplier' ||
                                                                $this->uri->segment(1) == 'stock' ? 'menu-open' : '' ?> text-light">
                            <a href="#" class="nav-link <?= $this->uri->segment(1) == 'sparepart' ||
                                                            $this->uri->segment(1) == 'service' ||
                                                            $this->uri->segment(1) == 'supplier' ||
                                                            $this->uri->segment(1) == 'stock' ? 'active' : '' ?> text-light">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Master Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('sparepart') ?>" class="nav-link <?= $this->uri->segment(1) == 'sparepart' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Spare Part</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('service') ?>" class="nav-link <?= $this->uri->segment(1) == 'service' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Service</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('supplier') ?>" class="nav-link <?= $this->uri->segment(1) == 'supplier' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Supplier</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('stock/stock_in_data') ?>" class="nav-link <?= $this->uri->segment(2) == 'stock_in_data' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Stock In</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('report/sales_report') ?>" class="nav-link <?= $this->uri->segment(1) == 'report' ? 'active' : '' ?> text-light">
                                    <i class="fas fa-file-invoice nav-icon"></i>
                                    <p>
                                        Report
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- jQuery -->
        <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?= $contents ?>
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; Julio Antony <?= date('Y'); ?>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?= base_url() ?>/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <!-- <script src="<?= base_url() ?>/assets/dist/js/pages/dashboard2.js"></script> -->

    <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Data Table -->
    <script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <!-- Data Table Responsive -->
    <script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table-1').DataTable();
        })
    </script>

</body>

</html>