<?php
require 'header.php';

//ambil data di URL
$id = $_GET["id"];
// query data mhs berdasarkan id
$ambildata = query("SELECT * FROM buku, rakbuku WHERE id_buku = '$id' AND buku.id_rak = rakbuku.id_rak")[0];
?>
<title>Detail Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3" style="margin-bottom: 90px;">
        <div class="isiEdit">
            <h2 class="mt-3">Detail <b><?php echo $ambildata["judul_buku"] ?></b> :</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/<?php echo $ambildata['Gambar']; ?>" alt="Gambar Belum Diupload" width="130">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ID Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    : <?php echo $ambildata["id_buku"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Pengarang</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    : <?php echo $ambildata["pengarang"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Penerbit</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    : <?php echo $ambildata["penerbit"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tahun Terbit</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    : <?php echo $ambildata["thn_terbit"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Jumlah Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    : <?php echo $ambildata["jumlah_buku"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Letak Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    : <?php echo $ambildata["nama_rak"] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'footer.php';
    ?>