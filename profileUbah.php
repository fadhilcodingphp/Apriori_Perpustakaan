<?php
require 'header.php';
$id = $_GET["id"];
// query data mhs berdasarkan id
$ubah = query("SELECT * FROM users WHERE id_user = '$id'")[0];
?>
<title>Ubah Profile | Rule Library</title>
<div class="profile">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                <div class="mt-2">
                    <h4><?= $ubah['nama']; ?></h4>
                </div>
            </div>
        </div>
        <div class="isiprofile">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="<?= $ubah['username']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="<?= $ubah['nama']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Kelas</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <select class="form-control" name="kelas">
                                <option disabled="disabled" selected="selected"><?= $ubah['kelas']; ?></option>
                                <option>X TKJ</option>
                                <option>XI TKJ</option>
                                <option>XII TKJ</option>
                                <option>X TAV</option>
                                <option>XI TAV</option>
                                <option>XII TAV</option>
                                <option>X RPL</option>
                                <option>XI RPL</option>
                                <option>XII RPL</option>
                                <option>X TKR</option>
                                <option>XI TKR</option>
                                <option>XII TKR</option>
                                <option>X TSM</option>
                                <option>XI TSM</option>
                                <option>XII TSM</option>
                                <option>X MULTIMEDIA</option>
                                <option>XI MULTIMEDIA</option>
                                <option>XII MULTIMEDIA</option>
                            </select>
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
        <?php
        require 'footer.php';
        ?>