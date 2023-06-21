<?php
require 'header.php';

$koneksi->query("DELETE FROM kategoribuku WHERE id_kategori='$_GET[id]'");
if (hapus() > 0) {
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='kategori.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Data Gagal Dihapus');
        document.location.href='kategori.php';
        </script>
        ";
}
