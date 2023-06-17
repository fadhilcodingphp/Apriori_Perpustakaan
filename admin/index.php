<?php
include 'header.php';
?>
<title>Dashboard | Rule Library</title>

<body>
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
                        <li><a href="riwayatpinjam.php">Riwayat Peminjaman</a></li>
                        <li class="has-children">
                            <a href="">Proses Data</a>
                            <ul class="dropdown">
                                <li><a href="#">Peminjaman Buku Terbanyak</a></li>
                                <li><a href="#">Peminjaman Buku Secara Berpasangan</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="">About</a>
                            <ul class="dropdown">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                    <div class="ml-auto">
                        <a href="../logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="hero" style="background-image: url('../assets/images/background.jpg');"></div>

    <div class="card-deck col-9">
        <div class="card">
            <img src="images/background1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Judul Buku : 750 buku</h5>
                <p class="card-text">Tersedia berbagai macam judul buku</p>
                <a href="#">Selengkapnya>>></a>
            </div>
        </div>
        <div class="card">
            <img src="images/background1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Eksemplar : 16000 buku</h5>
                <p class="card-text">Beberapa judul buku memiliki banyak eksemplar</p>
                <a href="#">Selengkapnya>>></a>
            </div>
        </div>
        <div class="card">
            <img src="images/background1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pengunjung : 300 orang</h5>
                <p class="card-text">User yang telah terdaftar dalam sistem</p>
                <a href="#">Selengkapnya>>></a>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>