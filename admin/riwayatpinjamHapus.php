<?php
require 'header.php';

$koneksi->query("DELETE FROM riwayatpinjam WHERE id_pinjam='$_GET[id]'");
if (hapus() > 0) {
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='riwayatpinjam1.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Data Gagal Dihapus');
        document.location.href='riwayatpinjam1.php';
        </script>
        ";
}
