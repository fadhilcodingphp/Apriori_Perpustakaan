<?php
require 'header.php';
$id = $_GET["id"];
// query data mhs berdasarkan id
$ambildata = query("SELECT * FROM riwayatpinjam WHERE id_pinjam = '$id'")[0];
?>
<title>Detail Peminjam Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3" style="margin-bottom: 100px;">
        <div class="isiEdit">
            <h2 class="mt-3">Detail Peminjam Buku</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="110">
                            <div class="mt-1">
                                <h4><?= $ambildata['nama_peminjam']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Nama Peminjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="text" class="form-control" value="<?= $ambildata['nama_peminjam']; ?>" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Judul Buku Yang Dipinjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="text" class="form-control" value="<?= $ambildata['judul_buku']; ?>" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Kelas</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="text" class="form-control" value="<?= $ambildata['kelas_peminjam']; ?>" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Tanggal Pinjam</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" value="<?= $ambildata['tgl_pinjam']; ?>" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Tanggal Kembali</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" value="<?= $ambildata['tgl_kembali']; ?>" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" href="riwayatpinjamEdit.php?id=<?= $ambildata['id_pinjam']; ?>">Edit</a>
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