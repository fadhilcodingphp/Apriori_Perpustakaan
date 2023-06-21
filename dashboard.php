<?php
include 'header.php';
?>
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
            <a href="buku.php">Selengkapnya>>></a>
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
                <?php $get1 = mysqli_query($koneksi, "SELECT*FROM riwayatpinjam WHERE id_pinjam");
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