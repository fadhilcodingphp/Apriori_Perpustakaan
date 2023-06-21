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
                        <label for="id_kategori" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" name="id_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Judul Buku</label>
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