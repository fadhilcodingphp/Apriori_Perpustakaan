<?php
require 'header.php';
$id = $_GET["id"];
// query data mhs berdasarkan id
$ubah = query("SELECT * FROM kategoribuku WHERE id_kategori = '$id'")[0];
?>
<title><?= $ubah['nama_kategori']; ?> | Rule Library</title>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <?php
        $ambil = mysqli_query($koneksi, "SELECT * FROM buku WHERE buku.id_kategori = '$id' ORDER BY judul_buku");
        ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <span class="card ml-3 mt-3" style="width: 13rem;">
                <img src="..." class="card-img-top" alt="...">
                <span class="card-body">
                    <h5 class="card-title"><?= $pecah['judul_buku']; ?></h5>
                </span>
                <span class="container mb-3">
                    <span class="card-text"> Jumlah : <span style="font-weight: 800;"><?= $pecah['jumlah_buku']; ?></span> buku</span>
                    <a href="#" class="btn btn-primary mt-2">Detail</a>
                </span>
            </span>
        <?php } ?>
    </div>
</div>
<br><br><br>
<?php
require 'footer.php';
?>