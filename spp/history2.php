<?php
session_start();
$nisn = $_SESSION['nisn'];//agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>

<head>
    <title>TRANSAKSI</title>

</head>

<body>

    <?php

    include('tampilan/header.php');
    include('tampilan/footer.php');
    ?>

    <!-- main content -->
    <div class="main-content bg-warning">
        <section class="section">
            <div class="section-header">
                <h1>HISTORY</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="logout.php">LOGOUT</a></div>
                </div>
            </div>

    <table class="table table-striped table-bordered">
        <tr class="fw-bold bg-warning">
            <td>NO</td>
            <td>NISN</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Tahun Spp</td>
            <td>Nominal Dibayar</td>
            <td>Sudah dibayar</td>
            <td>Tanggal Bayar</td>
            <td>Petugas</td>
        </tr>

        <?php
        include 'koneksi.php';
        include('tampilan/header.php');
        include('tampilan/footer.php');

        $no = 1;
        $sql = "SELECT*FROM pembayaran, siswa, kelas, spp, petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND pembayaran.nisn='$nisn' ORDER BY tgl_bayar DESC";
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nisn'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['nama_kelas'] ?></td>
                <td><?= $data['tahun'] ?></td>
                <td><?= number_format($data['nominal'], 2, ',', '.'); ?>
                <td><?= number_format($data['jumlah_bayar'], 2, ',', '.'); ?></td>
                <td><?= $data['tgl_bayar'] ?></td>
                <td><?= $data['nama_petugas'] ?></td>
            <?php } ?>
    </table>

</body>

</html>