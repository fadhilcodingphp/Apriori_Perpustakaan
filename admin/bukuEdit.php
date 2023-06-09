<?php
require 'header.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubahBuku($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href='buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah');
        document.location.href='bukuEdit.php';
        </script>
        ";
    }
}
//ambil data di URL
$id = $_GET["id"];
// query data mhs berdasarkan id
$ambildata = query("SELECT * FROM buku, kategoribuku WHERE id_buku = '$id' AND buku.id_kategori = kategoribuku.id_kategori")[0];
?>
<title>Edit Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3">
        <div class="isiEdit">
            <h2 class="mt-3">Edit Buku</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ID Kategori</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select class="form-select" aria-label="Default select example" name="id_kategori">
                                            <option selected><?= $ambildata['nama_kategori'] ?></option>
                                            <?php
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                                            while ($pecah = mysqli_fetch_assoc($ambil)) {
                                                echo "<option value=$pecah[id_kategori]> $pecah[nama_kategori]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Judul Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?php echo $ambildata["judul_buku"] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jumlah Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control" value="<?php echo $ambildata["jumlah_buku"] ?>" required>
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
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>