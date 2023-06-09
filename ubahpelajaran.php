<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit informasi</title>
    <link rel="stylesheet" href="tambahdatainformasi.css">
</head>
<body>
    <div class="content update">
        <h1>Edit informasi</h1>
        <?php
        include "koneksi2.php";
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM jadwal_pelajaran WHERE id_pelajaran = '$id'");
            $data = mysqli_fetch_assoc($query);
        ?>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id_pelajaran']; ?>">
            <label for="hari">Masukkan hari:</label><br>
            <input type="text" name="hari" id="hari" autocomplete="off" placeholder="Masukkan hari..." value="<?php echo $data['hari']; ?>"><br>
            <label for="nama_pelajaran">Nama pelajaran:</label><br>
            <input type="text" name="nama_pelajaran" id="nama_pelajaran" autocomplete="off" placeholder="Masukkan nama..." value="<?php echo $data['nama_pelajaran']; ?>"><br>
            <label for="jam">Masukkan jam:</label><br>
            <input type="text" name="jam" id="jam" autocomplete="off" placeholder="Tambahkan jam..." value="<?php echo $data['jam']; ?>"><br>
            <button type="submit" name="update">Update Data</button>
        </form>
        <?php
        } else {
            echo "ID tidak ditemukan.";
        }
        ?>
        <a href="jadwal-pelajaran.php" class="ambatukam">Kembali</a><br><br>
    </div>
    <?php
    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $hari = $_POST['hari'];
        $nama_pelajaran = $_POST['nama_pelajaran'];
        $jam = $_POST['jam'];
        
        mysqli_query($db, "UPDATE jadwal_pelajaran SET hari='$hari', nama_pelajaran='$nama_pelajaran', jam='$jam' WHERE id_pelajaran='$id'");
        
        echo "Data jadwal_pelajaran telah diperbarui";
        echo "<script>window.location='pengguna.php';</script>";
    }
    ?>
</body>
</html>
