<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="tabel.js"></script>
    <title>Daftar Kategori Buku | Rule Library</title>
</head>

<body>
    <?php
    include 'headertabel.php';
    ?>
    <div class="card" style="width: 1200px;
                                margin : 0 auto;
                                margin-top: 100px;
                                margin-bottom: 100px;
                                padding: 30px;
                               ">
        <h3>Daftar Kategori Buku</h3>
        <hr>
        <a class="btn btn-danger" style="width: 210px;" href="kategoriTambah.php" role="button">Tambah Data Kategori</a>
        <hr>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // include '../koneksi.php';
                $no = 0;
                $ambildata = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                ?>
                <?php
                while ($row = mysqli_fetch_assoc($ambildata)) {
                    $no++;
                ?>
                    <tr>
                        <td scope="row"><?php echo $no; ?></td>
                        <td><?php echo $row["id_kategori"] ?></td>
                        <td><?php echo $row["nama_kategori"] ?></td>
                        <td>
                            <a class="btn btn-primary" href="kategoriEdit.php?id=<?= $row['id_kategori']; ?>" role="button">Edit</a>
                            <a class="btn btn-danger" href="kategoriHapus.php?id=<?= $row['id_kategori']; ?>" role="button">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Copyright @Muhammad Fadhil AY</a>
    </nav>
</body>

</html>