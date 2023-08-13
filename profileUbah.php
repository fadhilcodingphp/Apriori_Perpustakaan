<?php
require 'header.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubahProfile($_POST) > 0) {
        echo "
        <script>
        document.location.href='profile.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah');
        document.location.href='profileUbah.php';
        </script>
        ";
    }
}
$id = $_GET["id"];
// query data mhs berdasarkan id
$ubah = query("SELECT * FROM users WHERE id_user = '$id'")[0];
?>
<title>Ubah Profile | Rule Library</title>
<div class="profile">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="assets/img/<?= $ubah['gambar']; ?>" alt="No file picture" class="rounded-circle p-1 bg-primary" width="90">
                <div class="mt-2">
                    <h4><?= $ubah['nama']; ?></h4>
                </div>
            </div>
        </div>
        <div class="isiprofile">
            <div class="card mb-3">
                <form action="" method="post">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="hidden" name="id_user" id="id_user" value="<?= $ubah['id_user']; ?>">
                                <input type="text" name="username" id="username" class="form-control" value="<?= $ubah['username']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Lengkap</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $ubah['nama']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Kelas</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select class="form-control" name="kelas" id="kelas">
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
                                <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>