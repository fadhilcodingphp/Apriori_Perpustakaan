<?php
include 'header.php';
?>
<title>Rak Buku | Rule Library</title>

<div class="tabelkategori">
    <div class="tombol">
        <div class="input-group mb-3">
            <a class="btn btn-dark" href="rakTambah.php" role="button">Tambah Rak</a>
        </div>
    </div>
    <table class="table">
        <div class="thead">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Rak</th>
                    <th scope="col">Nama Rak</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $batas = 5;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;

                $data = mysqli_query($koneksi, "SELECT*FROM rakbuku");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);

                $data_pegawai = mysqli_query($koneksi, "SELECT*FROM rakbuku LIMIT $halaman_awal, $batas");
                $nomor = $halaman_awal + 1;
                while ($d = mysqli_fetch_array($data_pegawai)) {
                ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $d['id_rak']; ?></td>
                        <td><?php echo $d['nama_rak']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="rakEdit.php?id=<?= $d['id_rak']; ?>" role="button">Edit</a>
                            <a class="btn btn-danger" href="#" role="button">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </div>
    </table>
    <nav>
        <ul class="pagination justify-content-left">
            <li class="page-item">
                <a class="page-link" <?php if ($halaman > 1) {
                                            echo "href='?halaman=$previous'";
                                        } ?>>Previous</a>
            </li>
            <?php
            for ($x = 1; $x <= $total_halaman; $x++) {
            ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
            <?php
            }
            ?>
            <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                            echo "href='?halaman=$next'";
                                        } ?>>Next</a>
            </li>
        </ul>
    </nav>
</div>
<?php
include 'footer.php';
?>