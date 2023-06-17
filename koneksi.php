<?php
$koneksi = mysqli_connect("localhost", "root", "", "skripsiku");

session_start();
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
            $_SESSION['rolesiswa'] = 'Siswa';
            header('location:../dashboard.php');
        }
    } else {
        $error = true;
    }
}

// registrasi
function daftar($daftar)
{
    global $koneksi;
    $nama = mysqli_real_escape_string($koneksi, $daftar["nama"]);
    $username = mysqli_real_escape_string($koneksi, $daftar["username"]);
    $password = mysqli_real_escape_string($koneksi, $daftar["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $daftar["cpassword"]);
    $kelas = mysqli_real_escape_string($koneksi, $daftar["kelas"]);

    //cek konfirmasi pessword
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return false;
    }

    //cek apakah username sudah pernah diinput di database 
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username yang dipilih sudah terdaftar')</script>";
        return false;
    }
    // //enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);
    // $password2 = password_hash($password2, PASSWORD_DEFAULT);

    //tambah user baru ke database
    mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$nama', '$username', '$password' , '$password2', '$kelas', 'siswa')");
    return mysqli_affected_rows($koneksi);
}
