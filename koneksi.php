<?php
$koneksi = mysqli_connect("localhost", "root", "", "skripsiku");

// login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {
        // kalau data ditemukan
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if ($role == 'admin') {
            $_SESSION['log'] = 'Logged';
            $_SESSION['roleadmin'] = 'Admin';
            header('location:../admin/index.php');
        } else {
            $_SESSION['log'] = 'Logged';
            $_SESSION['rolesiwa'] = 'Siswa';
            header('location:../index.php');
        }
    } else {
        echo 'Username dan Password Tidak Sesuai';
    }
}
