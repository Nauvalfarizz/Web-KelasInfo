<?php
require "koneksi2.php";

$siswa = tampil("SELECT * FROM `jadwal_piket` WHERE 1");

if (isset($_GET['hapusid_siswa'])) {
    $id_siswa = $_GET['hapusid_siswa'];
    // Lakukan proses hapus data pengguna berdasarkan id
    mysqli_query($db, "DELETE FROM jadwal_piket WHERE id_piket = '$id_siswa'");
    echo "<script>window.location='pengguna.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content read">
        <h2>Data pengguna</h2>
        <a href="tambahdatapiket.php" class="create-contact">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>hari</th>
                    <th>nama_piket</th>
                    <th>jam</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($siswa as $pgn): ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$pgn['hari']?></td>
                    <td><?=$pgn['nama_piket']?></td>
                    <td><?=$pgn['jam']?></td>
                    <td>
                        <a href="jadwal-piket.php?hapusid_siswa=<?=$pgn['id_piket']?>" onclick="return confirm('Apakah data ingin dihapus?')">Hapus</a> ||
                        <a href="ubahpiket.php?id=<?=$pgn['id_piket']?>">Ubah</a>
                    </td> 
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
include("koneksi.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin - Nama Sekolah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

<!-- navbar -->
<div class="navbar">
    <div class="container">
        <!-- navbar brand -->
        <h2 class="nav-brand float-left"><a href="index.php">KELASINFO</a></h2>
        <!-- navbar menu -->
        <ul class="nav-menu float-left">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="pengguna.php">Pengguna</a></li>
            <li><a href="about.php">About</a></li>
            <li>
                <a href="#">Informasi <i class="fa fa-caret-down"></i></a>
                <!-- sub menu -->
                <ul class="dropdown">
                    <li><a href="jadwal-pelajaran.php">Jadwal Pelajaran</a></li>
                    <li><a href="jadwal-piket.php">Jadwal Piket</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Akun <i class="fa fa-caret-down"></i></a>
                <!-- sub menu -->
                <ul class="dropdown">
                    <li><a href="ubah-password.php">Ubah Password</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
