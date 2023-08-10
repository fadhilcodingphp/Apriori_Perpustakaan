<?php
require 'header.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahRak($_POST) > 0) {
        echo "
         <script>
         document.location.href='rak.php';
         </script>
         ";
    } else {
        echo "
         <script>
         document.location.href='rakTambah.php';
         </script>
         ";
    }
}
?>
<title>Tambah Rak | Rule Library</title>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="addkategori">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID Rak*</label>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT max(id_rak) as kodeTerbesar FROM rakbuku");
                        $data = mysqli_fetch_array($query);
                        $kodeBarang = $data['kodeTerbesar'];
                        $urutan = (int) substr($kodeBarang, 3, 3);
                        $urutan++;
                        $huruf = "RBK";
                        $kodeBarang = $huruf . sprintf("%03s", $urutan);
                        ?>
                        <input type="text" name="id_rak" class="form-control" id="id_rak" value="<?php echo $kodeBarang; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_rak" class="form-label">Nama Rak*</label>
                        <input type="text" class="form-control" name="nama_rak">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah Rak</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>