<?php
$koneksi = mysqli_connect("localhost", "root", "", "skripsiku");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/template.css">
</head>

<body background="assets/images/background.jpg" style="width: 100%;">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="site-logo col-3"><a href="index.php">PERPUSTAKAAN SMK NEGERI LABUANG</a></div>
                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                    <div class="ml-auto">
                        <a href="login/index.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <title>Dashboard | Rule Library</title>
    <div class="card-deck col-10">
        <div class="card">
            <img src="assets/images/background1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?php $get1 = mysqli_query($koneksi, "SELECT*FROM buku");
                    $count1 = mysqli_num_rows($get1);
                    ?>
                    Jumlah Judul : <b><?= $count1; ?></b> buku</h5>
                <p class="card-text">Tersedia berbagai macam judul buku</p>
                <a href="daftarbuku.php?id=PSNL007">Selengkapnya>>></a>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/background1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?php $get1 = mysqli_query($koneksi, "SELECT*FROM users WHERE role='siswa'");
                    $count1 = mysqli_num_rows($get1);
                    ?>
                    Pengunjung : <b><?= $count1; ?></b> orang</h5>
                <p class="card-text">User yang telah terdaftar dalam sistem</p>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/background1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?php $get1 = mysqli_query($koneksi, "SELECT*FROM riwayatpinjam");
                    $count1 = mysqli_num_rows($get1);
                    ?>
                    Transaksi : <b><?= $count1; ?></b> peminjaman</h5>
                <p class="card-text">Total transaki peminjaman buku</p>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>