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
    <title>Daftar Rak Buku | Rule Library</title>
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
        <h3>Daftar Rak Buku</h3>
        <hr>
        <a class="btn btn-danger" style="width: 210px;" href="rakTambah.php" role="button">Tambah Data Rak</a>
        <hr>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Rak</th>
                    <th>Nama Rak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // include '../koneksi.php';
                $no = 0;
                $ambildata = mysqli_query($koneksi, "SELECT * FROM rakbuku");
                ?>
                <?php
                while ($row = mysqli_fetch_assoc($ambildata)) {
                    $no++;
                ?>
                    <tr>
                        <td scope="row"><?php echo $no; ?></td>
                        <td><?php echo $row["id_rak"] ?></td>
                        <td><?php echo $row["nama_rak"] ?></td>
                        <td>
                            <a class="btn btn-primary" href="rakEdit.php?id=<?= $row['id_rak']; ?>" role="button">Edit</a>
                            <a class="btn btn-danger" href="rakHapus.php?id=<?= $row['id_rak']; ?>" role="button">Hapus</a>
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