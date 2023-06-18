<?php
require 'header.php';
?>
<title>Tambah Kategori | Rule Library</title>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="addkategori">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>