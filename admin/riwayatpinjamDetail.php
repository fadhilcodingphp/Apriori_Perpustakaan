<?php
require 'header.php';
?>
<title>Detail Peminjam Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3">
        <div class="isiEdit">
            <h2 class="mt-3">Detail Peminjam Buku</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="110">
                            <div class="mt-1">
                                <h4>John Doe</h4>
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
                                    Kenneth Valdez
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Judul Buku Yang Dipinjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    fip@jukmuh.al
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Kelas</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    (239) 816-9029
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Tanggal Pinjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    (239) 816-9029
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Tanggal Kembali</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    (239) 816-9029
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" href="riwayatpinjamEdit.php">Edit</a>
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