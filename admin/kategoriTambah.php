<?php
require 'header.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahKategori($_POST) > 0) {
        echo "
         <script>
         document.location.href='kategori.php';
         </script>
         ";
    } else {
        echo "
         <script>
         document.location.href='kategoriTambah.php';
         </script>
         ";
    }
}
?>
<title>Tambah Kategori | Rule Library</title>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="addkategori">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID Kategori*</label>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT max(id_kategori) as kodeTerbesar FROM kategoribuku");
                        $data = mysqli_fetch_array($query);
                        $kodeBarang = $data['kodeTerbesar'];
                        $urutan = (int) substr($kodeBarang, 4, 3);
                        $urutan++;
                        $huruf = "PSNL";
                        $kodeBarang = $huruf . sprintf("%03s", $urutan);
                        ?>
                        <input type="text" name="id_kategori" class="form-control" id="id_kategori" value="<?php echo $kodeBarang; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori*</label>
                        <input type="text" class="form-control" name="nama_kategori">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>