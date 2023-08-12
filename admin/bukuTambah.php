<?php
require 'header.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahBuku($_POST) > 0) {
        echo "
        <script>
        document.location.href='bukuTambah.php';
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
    <div class="row" style="margin-bottom: 90px;">
        <div class="col">
            <div class="addbook">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori Buku*</label>
                        <div class="col-15">
                            <select class="form-control" aria-label="Default select example" name="id_kategori">
                                <option selected>---</option>
                                <?php
                                $ambil = mysqli_query($koneksi, "SELECT * FROM kategoribuku ORDER BY nama_kategori");
                                while ($pecah = mysqli_fetch_assoc($ambil)) {
                                    echo "<option value=$pecah[id_kategori]> $pecah[nama_kategori]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID Buku*</label>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT max(id_buku) as kodeTerbesar FROM buku");
                        $data = mysqli_fetch_array($query);
                        $kodeBarang = $data['kodeTerbesar'];
                        $urutan = (int) substr($kodeBarang, 1, 3);
                        $urutan++;
                        $huruf = "A";
                        $kodeBarang = $huruf . sprintf("%03s", $urutan);
                        ?>
                        <input type="text" name="id_buku" class="form-control" id="id_buku" value="<?php echo $kodeBarang; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku*</label>
                        <input type="text" class="form-control" name="judul_buku">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Buku*</label>
                        <input type="text" class="form-control" name="jumlah_buku">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Letak Buku*</label>
                        <div class="col-15">
                            <select class="form-control" aria-label="Default select example" name="id_rak">
                                <option selected>---</option>
                                <?php
                                $ambil = mysqli_query($koneksi, "SELECT * FROM rakbuku");
                                while ($pecah = mysqli_fetch_assoc($ambil)) {
                                    echo "<option value=$pecah[id_rak]> $pecah[nama_rak]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Gambar" class="col-form-label">Foto Buku*</label>
                        <input type="file" name="Gambar" class="form-control" id="Gambar">
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