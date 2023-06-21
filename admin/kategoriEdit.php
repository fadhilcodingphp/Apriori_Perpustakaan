<?php
require 'header.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubahKategori($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href='kategori.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah');
        document.location.href='kategoriEdit.php';
        </script>
        ";
    }
}
//ambil data di URL
$id = $_GET["id"];
// query data mhs berdasarkan id
$ubah = query("SELECT * FROM kategoribuku WHERE id_kategori = '$id'")[0];
?>

<title>Edit Kategori | Rule Library</title>
<div class="profile">
    <div class="card mt-3">
        <div class="isiprofile">
            <h2 class="mt-3">Edit Kategori</h2>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">ID Kategori</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="id_kategori" class="form-control" id="id_kategori" value="<?= $ubah["id_kategori"] ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Kategori</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?= $ubah["nama_kategori"] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>