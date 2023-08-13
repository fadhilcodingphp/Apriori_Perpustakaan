<?php
$koneksi = mysqli_connect("localhost", "root", "", "skripsiku");

session_start();

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function uploadGambar()
{
    $gambarProduk = $_FILES['Gambar']['name'];
    $ukuranGambar = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpProduk = $_FILES['Gambar']['tmp_name'];
    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script> alert('Gambar Belum Diupload'); </script>";
        return $gambarProduk;
    }
    //cek apakah yang diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', ''];
    $ekstensiGambar = explode('.', $gambarProduk);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script> alert('Yang anda upload bukan gambar'); </script>";
        return false;
    }
    //cek jika ukurannya terlalu besar
    if ($ukuranGambar > 5000000) {
        echo "<script> alert('Ukuran gambar terlalu besar'); </script>";
        return false;
    }
    //lolos pengecekan, generate nama baru
    $gambarBaru = uniqid();
    $gambarBaru .= '.';
    $gambarBaru .= $ekstensiGambar;
    move_uploaded_file($tmpProduk, '../assets/img/' . $gambarBaru);
    return $gambarBaru;
}

function hapus()
{
    global $koneksi;
    return mysqli_affected_rows($koneksi);
}

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
            $_SESSION['roleadmin'] = $username;
            header('location:../admin/index.php');
        } else {
            $_SESSION['log'] = 'Logged';
            $_SESSION['rolesiswa'] = $username;
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
    $Gambar = uploadGambar();
    if (!$Gambar) {
        return false;
    }

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
    mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$nama', '$username', '$password' , '$password2', '$kelas', '$Gambar', 'siswa')");
    return mysqli_affected_rows($koneksi);
}

// kategori
function tambahKategori($data)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);

    //query insert data
    $queryinput = "INSERT INTO kategoribuku VALUES ('$id_kategori', '$nama_kategori')";
    mysqli_query($koneksi, $queryinput);
    return mysqli_affected_rows($koneksi);
}

function ubahKategori($data)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);

    //query insert data
    $queryinput = "UPDATE kategoribuku SET 
                    id_kategori='$id_kategori', 
                    nama_kategori='$nama_kategori'
                    WHERE id_kategori='$id_kategori'
                    ";
    mysqli_query($koneksi, $queryinput);

    return mysqli_affected_rows($koneksi);
}

// rak
function tambahRak($data)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_rak = htmlspecialchars($data["id_rak"]);
    $nama_rak = htmlspecialchars($data["nama_rak"]);

    //query insert data
    $queryinput = "INSERT INTO rakbuku VALUES ('$id_rak', '$nama_rak')";
    mysqli_query($koneksi, $queryinput);
    return mysqli_affected_rows($koneksi);
}

function ubahRak($data)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_rak = htmlspecialchars($data["id_rak"]);
    $nama_rak = htmlspecialchars($data["nama_rak"]);

    //query insert data
    $queryinput = "UPDATE rakbuku SET 
                    id_rak='$id_rak', 
                    nama_rak='$nama_rak'
                    WHERE id_rak='$id_rak'
                    ";
    mysqli_query($koneksi, $queryinput);

    return mysqli_affected_rows($koneksi);
}


//buku
function tambahBuku($Buku)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_kategori = htmlspecialchars($Buku["id_kategori"]);
    $id_rak = htmlspecialchars($Buku["id_rak"]);
    $id_buku = htmlspecialchars($Buku["id_buku"]);
    $judul_buku = addslashes($Buku["judul_buku"]);
    $jumlah_buku = htmlspecialchars($Buku["jumlah_buku"]);

    $Gambar = uploadGambar();
    if (!$Gambar) {
        return false;
    }

    //query insert data
    $inputProduk = "INSERT INTO buku VALUES ('$id_buku', '$id_kategori', '$judul_buku', '$jumlah_buku', '$Gambar', '$id_rak')";
    mysqli_query($koneksi, $inputProduk);

    return mysqli_affected_rows($koneksi);
}

function ubahBuku($produk)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_buku = htmlspecialchars($produk["id_buku"]);
    $id_kategori = htmlspecialchars($produk["id_kategori"]);
    $id_rak = htmlspecialchars($produk["id_rak"]);
    $judul_buku = addslashes($produk["judul_buku"]);
    $jumlah_buku = htmlspecialchars($produk["jumlah_buku"]);

    //query ubah data
    $ubahproduk = "UPDATE buku SET
                    id_kategori = '$id_kategori',
                    id_rak = '$id_rak',
                    judul_buku = '$judul_buku',
                    jumlah_buku = '$jumlah_buku'
                    WHERE id_buku = '$id_buku'";
    mysqli_query($koneksi, $ubahproduk);
    return mysqli_affected_rows($koneksi);
}

//riwayatpinjam
function tambahPeminjam($data)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_pinjam = htmlspecialchars($data["id_pinjam"]);
    $nama_peminjam = htmlspecialchars($data["nama_peminjam"]);
    $kelas_peminjam = htmlspecialchars($data["kelas_peminjam"]);
    $judul_buku = htmlspecialchars($data["judul_buku"]);

    //query insert data
    $addpinjam = "INSERT INTO riwayatpinjam VALUES ('$id_pinjam', '$nama_peminjam', '$kelas_peminjam', '$judul_buku', NOW(), '')";
    mysqli_query($koneksi, $addpinjam);
    return mysqli_affected_rows($koneksi);
}

function ubahPinjam($pinjam)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $id_pinjam = htmlspecialchars($pinjam["id_pinjam"]);
    $nama_peminjam = htmlspecialchars($pinjam["nama_peminjam"]);
    $kelas_peminjam = htmlspecialchars($pinjam["kelas_peminjam"]);
    $judul_buku = htmlspecialchars($pinjam["judul_buku"]);
    $tgl_kembali = htmlspecialchars($pinjam["tgl_kembali"]);

    //query ubah data
    $ubahpinjam = "UPDATE riwayatpinjam SET
                    id_pinjam = '$id_pinjam',
                    nama_peminjam = '$nama_peminjam',
                    kelas_peminjam = '$kelas_peminjam',
                    judul_buku = '$judul_buku',
                    tgl_kembali = '$tgl_kembali'
                    WHERE id_pinjam = '$id_pinjam'";
    mysqli_query($koneksi, $ubahpinjam);
    return mysqli_affected_rows($koneksi);
}

function ubahProfile($profile)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $username = $_POST["username"];
    $id_user = $_POST["id_user"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];

    //query ubah data
    $ubahprofile = "UPDATE users SET
                    id_user = '$id_user',
                    username = '$username',
                    nama = '$nama',
                    kelas = '$kelas'
                    WHERE id_user = '$id_user'";
    mysqli_query($koneksi, $ubahprofile);
    return mysqli_affected_rows($koneksi);
}

function ubahProfileAdmin($profile)
{
    global $koneksi;
    //ambil data dari tiap elemen form
    $username = $_POST["username"];
    $id_user = $_POST["id_user"];
    $nama = $_POST["nama"];

    //query ubah data
    $ubahprofile = "UPDATE users SET
                    id_user = '$id_user',
                    username = '$username',
                    nama = '$nama'
                    WHERE id_user = '$id_user'";
    mysqli_query($koneksi, $ubahprofile);
    return mysqli_affected_rows($koneksi);
}
