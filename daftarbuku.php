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
            <span class="card ml-3 mt-3" style="width: 16rem;">
                <img src="..." class="card-img-top" alt="...">
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
<br><br><br>
<?php
require 'footer.php';
?>