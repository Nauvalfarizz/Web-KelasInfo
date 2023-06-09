<?php
require "koneksi2.php";

$siswa = tampil("SELECT * FROM `pengguna` WHERE 1");

if (isset($_GET['hapusid_siswa'])) {
    $id_siswa = $_GET['hapusid_siswa'];
    // Lakukan proses hapus data pengguna berdasarkan id
    mysqli_query($db, "DELETE FROM pengguna WHERE id_pengguna = '$id_siswa'");
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
<div class="content read">
	<h2>Data pengguna</h2>
	<a href="tambahdatapengguna.php" class="create-contact">Tambah Data</a>
	<table>
        <thead>
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td>username</td>
                <td>password</td>
                <td>level</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($siswa as $pgn): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$pgn['nama']?></td>
                <td><?=$pgn['username']?></td>
                <td><?=$pgn['password']?></td>
                <td><?=$pgn['level']?></td>
                <td class="actions">
                <a href="pengguna.php?hapusid_siswa=<?= $pgn['id_pengguna']; ?>">Hapus</a> |
                    <a href="ubahdata.php?id=<?= $pgn['id_pengguna']; ?>">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<?php
include("koneksi.php");
session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <title>panel admin - nama sekolah</title>
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
    <li><a href="pengguna.php">pengguna</a></li>
    <li><a href="about.php">about</a></li>
   <li>
    <a href="#">informasi<i class="fa fa-caret-down"></i></a>

<!-- sub menu -->
<ul class="dropdown">
    <li><a href="jadwal-pelajaran.php">jadwal pelajaran</a></li>
    <li><a href="jadwal-piket.php">jadwal piket</a></li>
   
</ul>
   </li>
   <li>
    <a href="#">akun<i class="fa fa-caret-down"></i></a>
<!-- sub menu -->
<ul class="dropdown">
    <li><a href="ubah-password.php">ubah password</a></li>
    <li><a href="logout.php">keluar</a></li>
</ul>
</li>
</ul>

<div class="clearfix"></div>
</div>

</div>

