<?php
require 'header.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubahBuku($_POST) > 0) {
        echo "
        <script>
        document.location.href='buku1.php';
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
$ambildata = query("SELECT * FROM buku
                                     INNER JOIN kategoribuku ON buku.id_kategori = kategoribuku.id_kategori 
                                     INNER JOIN rakbuku ON buku.id_rak = rakbuku.id_rak 
                                     WHERE buku.id_buku = '$id'")[0];
?>
<title>Edit Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3">
        <div class="isiEdit">
            <h2 class="mt-3">Edit Buku</h2>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="../assets/img/<?php echo $ambildata['Gambar']; ?>" alt="Gambar Belum Diupload" width="130">
                            </div>
                        </div>
                        <input type="hidden" name="gambarLama" value="<?= $ambildata["Gambar"] ?>">
                        <input type="file" name="Gambar" class="form-control" id="Gambar">
                    </div>
                    <div class="col-sm-9">
                        <div class="card mt-3 mb-3">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ID Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="id_buku" id="id_buku" class="form-control" value="<?php echo $ambildata["id_buku"] ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kategori Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select class="form-control" aria-label="Default select example" name="id_kategori" required>
                                            <option selected></option>
                                            <?php
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM kategoribuku ORDER BY nama_kategori");
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
                                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?php echo $ambildata["judul_buku"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Pengarang</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="pengarang" id="judul_buku" class="form-control" value="<?php echo $ambildata["pengarang"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Penerbit</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="penerbit" id="judul_buku" class="form-control" value="<?php echo $ambildata["penerbit"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tahun Terbit</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="thn_terbit" id="judul_buku" class="form-control" value="<?php echo $ambildata["thn_terbit"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jumlah Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control" value="<?php echo $ambildata["jumlah_buku"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Rak Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select class="form-control" aria-label="Default select example" name="id_rak" required>
                                            <option selected></option>
                                            <?php
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM rakbuku ORDER BY nama_rak");
                                            while ($pecah = mysqli_fetch_assoc($ambil)) {
                                                echo "<option value=$pecah[id_rak]> $pecah[nama_rak]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Status Buku</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="status" id="status" class="form-control" value="<?php echo $ambildata["status"] ?>">
                                        <p>Ubah menjadi angka 1 jika buku ini recommended</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <?php
        require 'footer.php';
        ?>