<?php
require 'header.php';

$koneksi->query("DELETE FROM buku WHERE id_buku='$_GET[id]'");
if (hapus() > 0) {
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='buku1.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Data Gagal Dihapus');
        document.location.href='buku.php';
        </script>
        ";
}
