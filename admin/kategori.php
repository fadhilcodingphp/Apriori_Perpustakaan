<?php
include 'header.php';
?>
<title>Kategori Buku | Rule Library</title>

<div class="tabelkategori">
    <div class="tombol">
        <div class="input-group mb-3">
            <a class="btn btn-dark" href="kategoriTambah.php" role="button">Tambah Kategori</a>
        </div>
    </div>
    <table class="table">
        <div class="thead">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Kategori</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="btn btn-danger" href="kategoriEdit.php" role="button">Edit</a>
                        <a class="btn btn-dark" href="#" role="button">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </div>
    </table>
</div>
<?php
include 'footer.php';
?>