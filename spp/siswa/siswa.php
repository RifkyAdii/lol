
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siswa - Aplikasi Pembayaran SPP </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center"><h3> Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-success">
            Anda Login Sebagai Siswa <b><?= $_SESSION['nama'] ?></b> Aplikasi Pembayaran SPP
                </div> </div>
                <div class="card">
                    <div class="card-body bg-success">
                 <a href="siswa.php" class="btn btn-warning">Siswa</a>
                 <a href="siswa.php?url=logout" class="btn btn-warning"> Logout</a>

                <div class="card mt-2">
                    <div class="card-body">
                        <!-- Ini Isi Web-->
                        <?php
                        $file = @$_GET['url'];
                        if(empty($file)){
                            echo"<h4>Selamat Datang DI Halaman Siswa</h4>";
                            echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                            echo"<hr>";
                            include 'history-pembayaran.php';
                        }else{
                            include $file.'.php';
                        }

                        ?>
                </div>
            </div>
        </div>
    </div>


<script scr="../js/bootstrap.bundle.min.js"></script>
</body>
</html>