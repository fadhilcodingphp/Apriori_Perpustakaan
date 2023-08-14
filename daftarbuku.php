<?php
require 'header.php';
$id = $_GET["id"];
// query data mhs berdasarkan id
$ubah = query("SELECT * FROM kategoribuku WHERE id_kategori = '$id'")[0];
?>
<title><?= $ubah['nama_kategori']; ?> | Rule Library</title>
<div class="daftarbuku">
    <div class="card">
        <div class="isibuku">
            <h4 style="font-weight: 800;">
                Daftar <?= $ubah['nama_kategori']; ?>
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
                        $ambil = mysqli_query($koneksi, "SELECT * FROM buku WHERE judul_buku LIKE '%$keyword%' AND id_kategori LIKE '%$id%' ORDER BY judul_buku ASC");
                    } else {
                        $ambil = mysqli_query($koneksi, "SELECT * FROM buku WHERE buku.id_kategori = '$id' ORDER BY judul_buku ASC");
                    }
                    ?>
                    <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
                        <span class="card ml-3 mt-3" style="width: 16rem;">
                            <img style="margin: 0 auto; padding-top: 10px;" width="150px" src="assets/img/<?php echo $pecah['Gambar']; ?>" alt="Gambar Belum Diupload">
                            <span class="card-body">
                                <h5 class="card-title"><?= $pecah['judul_buku']; ?></h5>
                            </span>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Jumlah</h6>
                                    </div>
                                    <div class="col-sm-5 text-secondary">
                                        : <?php echo $pecah["jumlah_buku"] ?> buku
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Letak Buku</h6>
                                    </div>
                                    <div class="col-sm-5 text-secondary">
                                        : RBK001
                                    </div>
                                </div>
                            </div>
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