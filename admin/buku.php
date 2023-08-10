<?php
include 'header.php';

//pagination riwayat
$ambildata = mysqli_query($koneksi, "SELECT * FROM buku, kategoribuku WHERE buku.id_kategori = kategoribuku.id_kategori");
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

$jumlahLink = 2;
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

$ambildata_perhalaman = mysqli_query($koneksi, "SELECT * FROM buku, kategoribuku WHERE buku.id_kategori = kategoribuku.id_kategori LIMIT $dataAwal, $jumlahData");

?>
<title>Daftar Buku| Rule Library</title>

<div class="tabel">
    <div class="tombol">
        <div class="input-group mb-3">
            <a class="btn btn-dark" href="bukuTambah.php" role="button">Tambah Buku</a>
            <div class="searchbook">
                <div class="input-group-append">
                    <input type="text" class="form-control" ;" placeholder="Masukkan Keyword Pencarian">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </div>
    <h4 class="paginationriwayat">
        <span class="previous">
            <?php if ($halamanAktif > 1) : ?>
                <a href="?halaman=<?php echo $halamanAktif - 1 ?>">
                    Previous
                </a>
            <?php endif; ?>
        </span>
        <span class="isipagination">
            <?php for ($i = $start_number; $i <= $end_number; $i++) : ?>
                <span class="angkapagination">
                    <?php if ($halamanAktif == $i) : ?>
                        <a href="?halaman=<?php echo $i; ?>" style="background:rgb(189, 225, 248);">
                            <?php echo $i; ?>
                        </a>

                    <?php else : ?>
                        <a href="?halaman=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endif; ?>
                </span>
            <?php endfor; ?>
        </span>
        <span class="next">
            <?php if ($halamanAktif < $jumlahPagination) : ?>
                <a href="?halaman=<?php echo $halamanAktif + 1 ?>">
                    Next
                </a>
            <?php endif; ?>
        </span>
    </h4>
    <table class="table">
        <div class="thead">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Jumlah Buku</th>
                    <th scope="col">Gambar</th>
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
                        <td><?php echo $row["id_kategori"] ?></td>
                        <td><?php echo $row["judul_buku"] ?></td>
                        <td><?php echo $row["jumlah_buku"] ?></td>
                        <td><img width="150px" src="../assets/img/<?php echo $row['gambar']; ?>" alt="Gambar Belum Diupload"></td>
                        <td>
                            <a class="btn btn-primary" href="bukuDetail.php?id=<?= $row['id_buku']; ?>" role="button">Detail</a>&nbsp;
                            <a class="btn btn-danger" href="bukuEdit.php?id=<?= $row['id_buku']; ?>" role="button">Edit</a>
                            <a class="btn btn-dark" href="bukuHapus.php?id=<?= $row['id_buku']; ?>" role="button">Hapus</a>
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