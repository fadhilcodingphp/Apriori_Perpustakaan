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
<title>Tambah Kategori | Rule Library</title>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="addkategori">
                <form method="post">
                    <div class="mb-3">
                        <label for="id_rak" class="form-label">ID Rak</label>
                        <input type="text" class="form-control" name="id_rak">
                    </div>
                    <div class="mb-3">
                        <label for="nama_rak" class="form-label">Nama Rak</label>
                        <input type="text" class="form-control" name="nama_rak">
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