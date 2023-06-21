<?php
require 'header.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahBuku($_POST) > 0) {
        echo "
        <script>
        document.location.href='buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Produk gagal ditambahkan');
        document.location.href='bukuTambah.php';
        </script>
        ";
    }
}
?>
<title>Tambah Buku | Rule Library</title>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="addbook">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori Buku</label>
                        <div class="col-15">
                            <select class="form-control" aria-label="Default select example" name="id_kategori">
                                <option selected>---</option>
                                <?php
                                $ambil = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                                while ($pecah = mysqli_fetch_assoc($ambil)) {
                                    echo "<option value=$pecah[id_kategori]> $pecah[nama_kategori]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul_buku">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Buku</label>
                        <input type="text" class="form-control" name="jumlah_buku">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" id="inputGroupFile01">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>