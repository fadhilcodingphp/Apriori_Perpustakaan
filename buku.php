<?php
require 'header.php';
// $id = $_GET["id"];
// query data mhs berdasarkan id
// $ubah = query("SELECT * FROM kategoribuku WHERE id_kategori = '$id'")[0];
?>
<title>Daftar Buku | Rule Library</title>
<div class="daftarbuku">
    <div class="card">
        <div class="isibuku">
            <h4 style="font-weight: 800;">
                Daftar Buku Perpustakaan
            </h4>
            <hr>
            <form action="" method="POST">
                <input class="form-search" type="search" placeholder="Cari Buku" aria-label="Search" name="keyword" autocomplete="off">
                <button class="btn btn-outline-dark" type="submit" name="cari">Search</button>
            </form>
            <div class="isidafku">
                <div class="row">
                    <?php
                    if (isset($_POST["cari"])) {
                        $keyword = $_POST["keyword"];
                        $ambil = mysqli_query($koneksi, "SELECT * FROM buku WHERE judul_buku LIKE '%$keyword%' ORDER BY judul_buku ASC");
                    } else {
                        $ambil = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY judul_buku ASC");
                    }
                    ?>
                    <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
                        <span class="card ml-3 mt-3" style="width: 16rem;">
                            <p style="font-size: 14px; padding: 10px; font-weight: 800;">Recommended</p>
                            <img style="margin: 0 auto; padding-top: 5px;" width="150px" src="assets/img/<?php echo $pecah['Gambar']; ?>" alt="Gambar Belum Diupload">
                            <span class="card-body">
                                <h5 class="card-title"><?= $pecah['judul_buku']; ?></h5>
                            </span>
                            <p style="padding-left: 20px; font-size: 10px;">Untuk informasi buku lebih lanjut silahkan klik tombol dibawah ini</p>
                            <hr>
                            <a href="bukuDetail.php?id=<?= $pecah['id_buku']; ?>" class="btn btn-primary">Detail>>></a>
                            <hr>
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<?php
require 'footer.php';
?>