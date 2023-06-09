<?php
include("koneksi.php");
session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <title>panel admin - nama sekolah</title>
        <link rel="stylesheet" type="text/css" href="indexcss.css">
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

<!-- content -->
<div class="content">

<div class="container">

<div class="box">

<div class="box-header">
Dashboard
</div>

<div class="box-body">
<h3>Selamat Datang </h3>
</div>

</div>

</div>

</div>

<!-- footer -->
<div class="footer">
<div class="container text-center">
copyright &copy; 2023 - kelasinfo.
</div>
</div>

</body>
</html>
<style>
    .bg-light{
	background: url('tu.webp') ;
    background-size: cover;
  background-position: center;
  height: 700px;
}
</style>