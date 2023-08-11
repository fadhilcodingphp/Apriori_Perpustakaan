<?php
include 'header.php';
?>
<title>Buku Recommended | Rule Library</title>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <?php
        $ambil = mysqli_query($koneksi, "SELECT * FROM buku WHERE buku.id_kategori = '$id' ORDER BY judul_buku");
        ?>
        <?php
        while ($pecah = mysqli_fetch_assoc($ambil)) {
        ?>
            <span class="card ml-3 mt-3" style="width: 16rem;">
                <img width="150px" src="assets/img/<?php echo $pecah['gambar']; ?>" alt="Gambar Belum Diupload">
                <span class="card-body">
                    <h5 class="card-title">
                        <?php echo $pecah['judul_buku']; ?>
                    </h5>
                </span>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="mb-0">Jumlah</h6>
                        </div>
                        <div class="col-sm-5 text-secondary">
                            : <?php echo $pecah['jumlah_buku']; ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <h6 class="mb-0">Letak Buku</h6>
                        </div>
                        <div class="col-sm-5 text-secondary">
                            : <?php echo $pecah['rak_buku']; ?>
                        </div>
                    </div>
                </div>
            </span>
        <?php } ?>
    </div>
</div>
<?php
include 'footer.php';
?>