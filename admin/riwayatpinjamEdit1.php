<?php
require 'header.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubahPinjam($_POST) > 0) {
        echo "
        <script>
        document.location.href='riwayatPinjam1.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah');
        document.location.href='riwayatpinjamEdit1.php';
        </script>
        ";
    }
}
$id = $_GET["id"];
// query data mhs berdasarkan id
$ambildata = query("SELECT * FROM riwayatpinjam WHERE id_pinjam = '$id'")[0];
?>
<title>Edit Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3" style="margin-bottom: 90px;">
        <div class="isiEdit">
            <h2 class="mt-3">Edit Data Peminjaman</h2>
            <hr>
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
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">ID Pinjam</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="id_pinjam" id="id_pinjam" class="form-control" value="<?php echo $ambildata["id_pinjam"] ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Nama Peminjam</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" value="<?php echo $ambildata["nama_peminjam"] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Kelas Peminjam</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="kelas_peminjam" id="kelas_peminjam" class="form-control" value="<?php echo $ambildata["kelas_peminjam"] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Judul Buku</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?php echo $ambildata["judul_buku"] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Dikembalikan Tanggal</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" value="<?php echo $ambildata["tgl_kembali"] ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>