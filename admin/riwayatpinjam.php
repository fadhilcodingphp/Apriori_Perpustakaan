<?php
include 'header.php';

$ambildata = mysqli_query($koneksi, "SELECT * FROM riwayatpinjam");
//konfigurasi pagination
$jumlahData = 10;
$totalData = mysqli_num_rows($ambildata);
$jumlahPagination = ceil($totalData / $jumlahData);

if (isset($_GET['halaman'])) {
    $halamanAktif = $_GET['halaman'];
} else {
    $halamanAktif = 1;
}

$dataAwal = ($halamanAktif * $jumlahData) - $jumlahData;

$jumlahLink = 3;
if ($halamanAktif > $jumlahLink) {
    $start_number = $halamanAktif - $jumlahLink;
} else {
    $start_number = 1;
}

if ($halamanAktif < ($jumlahPagination - $jumlahLink)) {
    $end_number = $halamanAktif + $jumlahLink;
} else {
    $end_number = $jumlahPagination;
}
//end

$ambildata_perhalaman = mysqli_query($koneksi, "SELECT * FROM riwayatpinjam LIMIT $dataAwal, $jumlahData");


?>
<title>Riwayat Peminjaman | Rule Library</title>

<div class="tabel">
    <div class="tombol">
        <div class="input-group mb-3">
            <a class="btn btn-dark" href="riwayatpinjamTambah.php" role="button">Tambah Data Peminjam</a>
            <div class="input-group-append">
                <input type="text" class="form-control" ;" placeholder="Masukkan Keyword Pencarian">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div>
        </div>
    </div>
    <h4 class="paginationriwayat">
        <?php if ($halamanAktif > 1) : ?>
            <a href="?halaman=<?php echo $halamanAktif - 1 ?>">
                &laquo;
            </a>
        <?php endif; ?>

        <?php for ($i = $start_number; $i <= $end_number; $i++) : ?>
            <?php if ($halamanAktif == $i) : ?>
                <a href="?halaman=<?php echo $i; ?>" style="color:white; background-color:red; font-weight:bold;">
                    <?php echo $i; ?>
                </a>
            <?php else : ?>
                <a href="?halaman=<?php echo $i; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($halamanAktif < $jumlahPagination) : ?>
            <a href="?halaman=<?php echo $halamanAktif + 1 ?>">
                &raquo;
            </a>
        <?php endif; ?>
    </h4>
    <table class="table">
        <div class="thead">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $no = 0 + $dataAwal;
                while ($row = mysqli_fetch_assoc($ambildata_perhalaman)) {
                    $no++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $row["nama_peminjam"] ?></td>
                        <td><?php echo $row["kelas_peminjam"] ?></td>
                        <td><?php echo $row["judul_buku"] ?></td>
                        <td><?php echo $row["tgl_pinjam"] ?></td>
                        <td>
                            <a class="btn btn-primary" href="riwayatpinjamDetail.php" role="button">Detail</a>&nbsp;
                            <a class="btn btn-danger" href="riwayatpinjamEdit.php" role="button">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </div>
    </table>
</div>
<?php
include 'footer.php';
?>