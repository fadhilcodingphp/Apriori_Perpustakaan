<?php
include 'header.php';
?>
<title>Buku Recommended | Rule Library</title>

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
                        <li><a href="index.php">Home</a></li>
                        <li class="has-children">
                            <a href="" class="nav-link active">Daftar Buku</a>
                            <ul class="dropdown">
                                <li><a href="bk_recomended.php">Buku Recommended</a></li>
                            </ul>
                        </li>
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
                        <a href="login/index.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="hero" style="background-image: url('images/background.jpg');"></div>
    <div class="tabel">
        <div class="tombol">
            <div class="input-group mb-3">
                <a class="btn btn-dark" href="../detail/index.php" role="button">Tambah Data Buku</a>
                <div class="input-group-append">
                    <input type="text" class="form-control" ;" placeholder="Masukkan Keyword Pencarian">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
        <table class="table">
            <div class="thead">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Jumlah Buku</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a class="btn btn-primary" href="#" role="button">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="#" role="button">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </div>
        </table>
        <div class="pagination">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>