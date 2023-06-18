<?php
require 'header.php';
?>
<title>Tambah Buku | Rule Library</title>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="addbook">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Buku</label>
                        <input type="text" class="form-control" name="ID_kategori">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" id="inputGroupFile01">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>