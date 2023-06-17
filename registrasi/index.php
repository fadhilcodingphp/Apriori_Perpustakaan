<?php
require '../koneksi.php';

if (isset($_POST["daftar"])) {
    if (daftar($_POST) > 0) {
        echo
        "<script>
        alert ('userbaru berhasil ditambah')
        document.location.href='../login/index.php';
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrasi | Rule Library</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/trasi.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper p-t-10 p-b-5 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-body">
                    <h2 class="title">Registrasi</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nama Lengkap" name="nama">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kelas">
                                    <option disabled="disabled" selected="selected">Kelas</option>
                                    <option>X TKJ</option>
                                    <option>XI TKJ</option>
                                    <option>XII TKJ</option>
                                    <option>X TAV</option>
                                    <option>XI TAV</option>
                                    <option>XII TAV</option>
                                    <option>X RPL</option>
                                    <option>XI RPL</option>
                                    <option>XII RPL</option>
                                    <option>X TKR</option>
                                    <option>XI TKR</option>
                                    <option>XII TKR</option>
                                    <option>X TSM</option>
                                    <option>XI TSM</option>
                                    <option>XII TSM</option>
                                    <option>X MULTIMEDIA</option>
                                    <option>XI MULTIMEDIA</option>
                                    <option>XII MULTIMEDIA</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpassword">
                        </div>
                        <div class="p-t-3">
                            <button class="btn btn--pill btn--green" type="submit" name="daftar">Daftar</button>
                        </div>
                        <p class="spa">Sudah Punya Akun? <a href="../login/index.php">Silahkan Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero" style="background-image: url('images/background.jpg');"></div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->