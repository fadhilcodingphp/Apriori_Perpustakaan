<?php
require 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="addpinjam">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="ID_kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Peminjam</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>