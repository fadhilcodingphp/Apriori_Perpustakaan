<?php
require 'header.php';
$id = $_SESSION["roleadmin"];
// query data mhs berdasarkan id
$ubah = query("SELECT * FROM users WHERE username = '$id'")[0];
?>
<title>Profile | Rule Library</title>
<div class="profile">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="../assets/img/<?= $ubah['gambar']; ?>" alt="No file picture" class="rounded-circle p-1 bg-primary" width="90">
                <div class="mt-1">
                    <h4><?= $ubah['nama']; ?></h4>
                </div>
            </div>
        </div>
        <div class="isiprofile">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $ubah['username']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $ubah['nama']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $ubah['role']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-info" href="profileUbah.php?id=<?= $ubah['id_user']; ?>">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'footer.php';
    ?>