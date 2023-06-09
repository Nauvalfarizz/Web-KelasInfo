<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah informasi</title>
    <link rel="stylesheet" href="tambahdatainformasi.css">
</head>
<body>
    <div class="content update">
        <h1>Tambah informasi</h1>
        <form action="" method="post">
            <label for="hari">Masukkan hari:</label><br>
            <input type="text" name="hari" id="hari" autocomplete="off" placeholder="Masukkan hari..."><br>
            <label for="nama_pelajaran">Nama pelajaran:</label><br>
            <input type="text" name="nama_pelajaran" id="nama_pelajaran" autocomplete="off" placeholder="Masukkan nama..."><br>
            <label for="jam">Masukkan jam:</label><br>
            <input type="text" name="jam" id="jam" autocomplete="off" placeholder="Tambahkan jam..."><br>
            <button type="submit" name="tambah">Tambah Data</button>
        </form>
        <a href="jadwal-pelajaran.php" class="ambatukam">Kembali</a><br><br>
    </div>
    <?php
        include "koneksi2.php";

        if (isset($_POST['tambah'])){
            mysqli_query($db, "INSERT INTO jadwal_pelajaran (hari, nama_pelajaran, jam) VALUES ('$_POST[hari]', '$_POST[nama_pelajaran]', '$_POST[jam]')");
            echo "Data jadwal_pelajaran telah tersimpan";
            echo "<script>window.location='pengguna.php';</script>";
        }
    ?>
</body>
</html>
