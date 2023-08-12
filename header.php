<?php
require 'koneksi.php';

if (!isset($_SESSION['rolesiswa'])) {
    header("Location: login/index.php");
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
                <nav class="mx-auto site-navigation">
                    <ul class="site-menu js-clone-nav d-none d-xl-block ml-3 pl-0">
                        <li><a href="dashboard.php" class="nav-link active">Home</a></li>
                        <li class="has-children">
                            <a href="#">Daftar Buku</a>
                            <ul class="dropdown">
                                <li style="font-size: 13px;">
                                    <?php $ambil = mysqli_query($koneksi, "SELECT * FROM kategoribuku ORDER BY nama_kategori"); ?>
                                    <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
                                        <a href="daftarbuku.php?id=<?= $pecah['id_kategori']; ?>" style="margin-bottom: -7px;"><?= $pecah['nama_kategori']; ?></a>
                                    <?php } ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                    </ul>
                </nav>

                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                    <div class="ml-auto">
                        <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>