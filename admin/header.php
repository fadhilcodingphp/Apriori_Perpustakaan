<?php
require '../koneksi.php';

if (!isset($_SESSION['roleadmin'])) {
    header("Location: ../login/index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/template.css">
</head>

<body background="../assets/images/background.jpg" style="width: 100%;">
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

                <nav class="mx-auto site-navigation">
                    <ul class="site-menu js-clone-nav d-none d-xl-block ml-3 pl-0">
                        <li><a href="index.php" class="nav-link active">Home</a></li>
                        <li class="has-children">
                            <a href="">Buku</a>
                            <ul class="dropdown">
                                <li><a href="rak1.php">Rak Buku</a></li>
                                <li><a href="kategori1.php">Kategori Buku</a></li>
                                <li><a href="buku1.php">Daftar Buku</a></li>
                            </ul>
                        </li>
                        <li><a href="riwayatpinjam1.php">Riwayat Peminjaman</a></li>
                        <li class="has-children">
                            <a href="">Proses Data</a>
                            <ul class="dropdown">
                                <li><a href="apriori/index.php?menu=data_transaksi">Laporan Harian</a></li>
                                <li><a href="apriori/index.php?menu=proses_apriori">Proses Apriori</a></li>
                                <li><a href="apriori/index.php?menu=hasil">Hasil Apriori</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pengaturan</a>
                            <ul class="dropdown">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                    <div class="ml-auto">
                        <a href="../logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Logout</a>
                    </div>
                    <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                </div>
            </div>
        </div>
    </header>