<?php
require 'header.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahPeminjam($_POST) > 0) {
        echo "
        <script>
        document.location.href='riwayatpinjam1.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Peminjaman gagal ditambahkan');
        document.location.href='riwayatpinjamTambah.php';
        </script>
        ";
    }
    error_reporting();
}
?>
<title>Tambah Peminjam | Rule Library</title>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">
        <div class="col">
            <div class="addpinjam">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID Pinjam*</label>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT max(id_pinjam) as kodeTerbesar FROM riwayatpinjam");
                        $data = mysqli_fetch_array($query);
                        $kodeBarang = $data['kodeTerbesar'];
                        $urutan = (int) substr($kodeBarang, 3, 4);
                        $urutan++;
                        $huruf = "PBK";
                        $kodeBarang = $huruf . sprintf("%03s", $urutan);
                        ?>
                        <input type="text" name="id_pinjam" class="form-control" id="id_pinjam" value="<?php echo $kodeBarang; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Peminjam*</label>
                        <div class="col-15">
                            <select class="form-control" aria-label="Default select example" name="nama">
                                <option selected>---</option>
                                <?php
                                $ambil = mysqli_query($koneksi, "SELECT * FROM users ORDER BY nama");
                                while ($pecah = mysqli_fetch_assoc($ambil)) {
                                    echo "<option value=$pecah[nama]> $pecah[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas*</label>
                        <div class="col-15">
                            <select class="form-control" aria-label="Default select example" name="kelas_peminjam" required>
                                <option selected></option>
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
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku*</label>
                        <div class="col-15">
                            <select class="form-control" aria-label="Default select example" name="judul_buku" required>
                                <option selected></option>
                                <?php
                                $ambil = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY judul_buku");
                                while ($pecah = mysqli_fetch_assoc($ambil)) {
                                    echo "<option value=$pecah[judul_buku]> $pecah[judul_buku]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah Peminjam</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>