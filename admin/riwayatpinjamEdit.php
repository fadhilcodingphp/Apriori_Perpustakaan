<?php
require 'header.php';
?>
<title>Edit Peminjam Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3">
        <div class="isiEdit">
            <h2 class="mt-3">Edit Peminjam Buku</h2>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            <div class="mt-2">
                                <h4>John Doe</h4>
                                <div class="inputfoto">
                                    <input type="file" id="inputGroupFile01">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card mt-1 mb-3">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Nama Peminjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="text" class="form-control" value="John Doe">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Judul Buku Yang Dipinjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="text" class="form-control" value="John Doe">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Kelas</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="text" class="form-control" value="john@example.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Tanggal Pinjam</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="date" class="form-control" value="john@example.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Tanggal Kembali</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    <input type="date" class="form-control" value="john@example.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="Save Changes">
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