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
        <nav class="main-header navbar navbar-expand " style="background: #3586ff;">
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
            <a href="daftar.php" class="brand-link" style="text-decoration:none; background: #1e1e1e;">
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
                            <a href="./daftar.php" class="nav-link">
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
                            <a href="edit.php" class="nav-link active">
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

        <?php

        include 'koneksi.php';

        if (isset($_GET['br_id'])) {
            // ambil nilai id dari url dan disimpan dalam variabel $id
            $id = ($_GET["br_id"]);

            // menampilkan data dari database yang mempunyai id=$id
            $query = "SELECT * FROM barang WHERE br_id='$id'";
            $result = mysqli_query($koneksi, $query);
            // jika data gagal diambil maka akan tampil error berikut
            if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            }
            // mengambil data dari database
            $data = mysqli_fetch_assoc($result);
            // apabila data tidak ada pada database maka akan dijalankan perintah ini
            if (!count($data)) {
                echo "<script>alert('Data tidak ditemukan pada database');window.location='daftar.php';</script>";
            }
        } else {
            // apabila tidak ada data GET id pada akan di redirect ke index.php
            echo "<script>alert('Pilih Data ID.');window.location='daftar.php';</script>";
        }
        ?>

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
                        <div class="card-header" style="color: #fff; background: #1e1e1e;">Edit Barang</div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" action="p_edit.php" method="post">

                                <input name="br_id" value="<?php echo $data['br_id']; ?>" hidden />

                                <div class="mb-3 mt-3">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="namabarang" value="<?php echo $data['br_nm']; ?>">
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" name="harga" value="<?php echo $data['br_hrg']; ?>" />
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" name="stok" required="" value="<?php echo $data['br_stok']; ?>" />
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Satuan</label>
                                    <input type="text" class="form-control" name="satuan" required="" value="<?php echo $data['br_satuan']; ?>" />
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Gambar1</label>
                                    <input class="form-control" type="file" name="gambar1">
                                    <i class="" style="font-size: 11px;color: red">Abaikan Jika Tidak Merubah Gambar</i>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Gambar1</label>
                                    <input class="form-control" type="file" name="gambar2">
                                    <i class="" style="font-size: 11px;color: red">Abaikan Jika Tidak Merubah Gambar</i>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Gambar1</label>
                                    <input class="form-control" type="file" name="gambar3">
                                    <i class="" style="font-size: 11px;color: red">Abaikan Jika Tidak Merubah Gambar</i>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Gambar1</label>
                                    <input class="form-control" type="file" name="gambar4">
                                    <i class="" style="font-size: 11px;color: red">Abaikan Jika Tidak Merubah Gambar</i>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label>Keterangan</label>
                                    <textarea type="text" max="100" class="form-control" name="keterangan" required=""><?php echo $data['ket']; ?></textarea>
                                </div>

                                <div class="d-grid gap-2">
                                    <button class="btn btn-success mt-3" type="submit">Update</button>
                                </div>

                        </div>
                    </div>
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php

        // Check If form submitted, insert form data into users table.
        if (isset($_POST['Submit'])) {
            $namabarang   = $_POST['namabarang'];
            $harga     = $_POST['harga'];
            $stok    = $_POST['stok'];
            $satuan    = $_POST['satuan'];
            $gambar1 = $_POST['gambar1'];
            $gambar2 = $_POST['gambar2'];
            $gambar3 = $_POST['gambar3'];
            $gambar4 = $_POST['gambar4'];
            $keterangan = $_POST['keterangan'];
            unset($_POST);

            // include database connection file
            include("koneksi.php");

            // Insert user data into table
            $sql = "INSERT INTO barang (br_nm, br_hrg, br_stok, br_satuan, br_gbr1, br_gbr2, br_gbr3, br_gbr4, ket) VALUES ('$namabarang', '$harga', '$stok', '$satuan', '$gambar1', '$gambar2', '$gambar3', '$gambar4', '$keterangan')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script> alert ('Data Buku Berhasil Ditambah');document.location='daftar.php';</script>";
            } else {
                die(mysqli_error($koneksi));
            }
        }
        ?>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>

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