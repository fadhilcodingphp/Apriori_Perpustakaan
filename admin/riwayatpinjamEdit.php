<?php
require 'header.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubahPinjam($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href='riwayatpinjam1.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah');
        document.location.href='riwayatpinjamEdit.php';
        </script>
        ";
    }
}
$id = $_GET["id"];
// query data mhs berdasarkan id
$ambildata = query("SELECT * FROM riwayatpinjam WHERE id_pinjam = '$id'")[0];
?>
<title>Edit Peminjam Buku | Rule Library</title>
<div class="editbook" style="margin-bottom: 100px;">
    <div class="card mt-3">
        <div class="isiEdit">
            <h2 class="mt-3">Edit Peminjam Buku</h2>
            <hr>
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-2">
                                    <h4><?= $ambildata['nama_peminjam']; ?></h4>
                                    <div class="inputfoto">
                                        <input type="file" id="inputGroupFile01">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="card mt-1 mb-3">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Nama Peminjam</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="nama_peminjam" class="form-control" value="<?= $ambildata['nama_peminjam']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Judul Buku Yang Dipinjam</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="judul_buku" class="form-control" value="<?= $ambildata['judul_buku']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Kelas</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="kelas_peminjam" class="form-control" value="<?= $ambildata['kelas_peminjam']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Tanggal Pinjam</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="date" name="tgl_pinjam" class="form-control" value="<?= $ambildata['tgl_pinjam']; ?>">
                                    </div>
                                </div>
                                <div class=" row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Tanggal Kembali</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="date" name="tgl_kembali" class="form-control" value="<?= $ambildata['tgl_kembali']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <?php
        require 'footer.php';
        ?>