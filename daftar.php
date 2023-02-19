<?php require_once("koneksi.php");
if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Cahaya Cerdas</title>
    <link rel="shortcut icon" type="image/jpg" href="upload/logocc.png">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Margarine&family=Montaga&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style type="text/css">
        .fut {
            display: flex;
            display: flex-end;
            align-items: flex-end;
            min-height: 265px;
            background: #fff;
        }

        .fut footer {
            position: relative;
            width: 100%;
            background: #3586ff;
            min-height: 100px;
            padding: 20px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }

        .fut p {
            color: #eee;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 1.1em;
        }

        /*wave and animation*/
        .fut footer .wave {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url(https://i.ibb.co/rZt4Nhg/wave.png);
            background-size: 1000px 100px;
        }

        .fut footer .wave#wave1 {
            z-index: 10000;
            opacity: 1;
            bottom: 0;
            animation: animateWave 4s linear infinite;
        }

        .fut footer .wave#wave2 {
            z-index: 9999;
            opacity: 0.5;
            bottom: 10px;
            animation: animateWave_02 4s linear infinite;
        }

        .fut footer .wave#wave3 {
            z-index: 10000;
            opacity: 0.2;
            bottom: 0;
            animation: animateWave 3s linear infinite;
        }

        .fut footer .wave#wave4 {
            z-index: 9999;
            opacity: 0.7;
            bottom: 20px;
            animation: animateWave_02 3s linear infinite;
        }

        .bg-loader {
            background-color: #eee;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-loader .loader {
            width: 100px;
            height: 100px;
            border: 3px solid #fff;
            border-radius: 50%;
            border-top-color: #232323;
            border-right-color: #232323;
            border-bottom-color: #232323;
            animation: muter-muter .7s linear infinite;
        }

        @keyframes muter-muter {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animateWave {
            0% {
                background-position-x: 1000px;
            }

            100% {
                background-position-x: 0px;
            }
        }

        @keyframes animateWave_02 {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: 1000px;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background: #3586ff;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: #fff;"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="color: #fff;"><i class="fas fa-th-large"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="akunuser.php?logoutSubmit=1" style="color: #fff;"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #1e1e1e;">
            <!-- Brand Logo -->
            <a href="daftar.php" class="brand-link" style="text-decoration:none; background:#1e1e1e;">
                <img src="upload/logocc.png" style="margin-bottom: -14px; margin-top: -19px; margin-left: 5px; width:45px;">
                <span class="brand-text font-weight-light" style="font-size: 20px;"><strong>Cahaya Cerdas</strong></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item" style="margin-top: 15px;">
                            <a href="./daftar.php" class="nav-link active">
                                <i class="nav-icon fas fa-box-open mr-1"></i>
                                <p>
                                    Daftar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tambah.php" class="nav-link">
                                <i class="nav-icon fas fa-plus-square"></i>
                                <p>
                                    Tambah Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Edit Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pesan.php" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Contact
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header" style="color: #fff; background-color: #1e1e1e;">
                            Daftar Barang
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row justify-content-start" style="background-color:#fff">
                                    <div class="col-6">
                                        <?php
                                        include("koneksi.php");
                                        if (isset($_GET['search'])) {
                                            $search = $_GET['search'];
                                        ?>
                                            <div class="mt-2"><?php echo "<b>Hasil Pencarian : " . $search . "</b>" ?></div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-6">
                                        <form class="d-flex">
                                            <input class="form-control me-2 border-dark" type="search" placeholder="Search" name="search" aria-label="Search">
                                            <button class="btn btn-dark" style="background-color: #333" value="search" type="submit">Search</button>
                                        </form>
                                    </div>
                                </div>
                                <table class="table table-hover table-responsive table-bordered mt-3">
                                    <thead class="thead-dark" style="background-color: #1e1e1e;">
                                        <tr>
                                            <th style="font-size: 14px; text-align: center;">No</th>
                                            <th style="font-size: 14px; text-align: center; min-width: 150px;">Nama Barang</th>
                                            <th style="font-size: 14px; text-align: center;">Harga</th>
                                            <th style="font-size: 14px; text-align: center;">Stok</th>
                                            <th style="font-size: 14px; text-align: center; min-width: 250px;">Keterangan</th>
                                            <th style="font-size: 14px; text-align: center;">Gambar1</th>
                                            <th style="font-size: 14px; text-align: center;">Gambar2</th>
                                            <th style="font-size: 14px; text-align: center;">Gambar3</th>
                                            <th style="font-size: 14px; text-align: center;">Gambar4</th>
                                            <th style="font-size: 14px; text-align: center;"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if (isset($_GET['search'])) {
                                        $search = $_GET['search'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE br_nm like '%" . $search . "%' OR ket like '%" . $search . "%'");
                                    } else {
                                        $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY br_id ASC");
                                    }
                                    $no = 1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                        <tr>
                                            <td style="font-size: 14px; text-align: center;"><?= $no++; ?></td>
                                            <td style="font-size: 14px; "><?= $row['br_nm']; ?></td>
                                            <td style="font-size: 14px; text-align: center;"><?= $row['br_hrg']; ?></td>
                                            <td style="font-size: 14px; text-align: center;"><?= $row['br_stok']; ?></td>
                                            <td style="font-size: 14px; text-align: justify;"><?= $row['ket']; ?></td>
                                            <td style="font-size: 14px; "><img src="upload/<?= $row['br_gbr1']; ?>" alt="" style="max-width: 100px;"></td>
                                            <td style="font-size: 14px; "><img src="upload/<?= $row['br_gbr2']; ?>" alt="" style="max-width: 100px;"></td>
                                            <td style="font-size: 14px; "><img src="upload/<?= $row['br_gbr3']; ?>" alt="" style="max-width: 100px;"></td>
                                            <td style="font-size: 14px; "><img src="upload/<?= $row['br_gbr4']; ?>" alt="" style="max-width: 100px;"></td>
                                            <td style="text-align: center;">
                                                <a style="width: 70px; margin-bottom: 2px; color: #1e1e1e; font-size: 18px;" href="edit.php?br_id=<?php echo $row['br_id']; ?>"><i class="fas fa-edit"></i></a>
                                                <a style="width: 70px; color: #1e1e1e; font-size: 18px;" href="p_hapus.php?br_id=<?php echo $row['br_id']; ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?') "><i class="fas fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                            <!-- AKHIR CARD TABEL -->
                        </div>
                        <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <div class="fut">
            <footer>
                <div class="waves">
                    <div class="wave" id="wave1"></div>
                    <div class="wave" id="wave2"></div>
                    <div class="wave" id="wave3"></div>
                    <div class="wave" id="wave4"></div>
                </div>
                <p>Copyright &copy 2022 - Cahaya Cerdas | All Rights Reserved</p>
            </footer>
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="admin/dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="admin/plugins/raphael/raphael.min.js"></script>
    <script src="admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="admin/plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="admin/dist/js/pages/dashboard2.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>
</body>

</html>