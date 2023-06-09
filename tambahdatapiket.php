<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Piket</title>
    <link rel="stylesheet" href="tambahdatapiket.css">
</head>
<body>
    <div class="content update">
        <h1>Edit Data Piket</h1>
        <?php
        include "koneksi2.php";

        // Mendapatkan ID data piket yang akan diedit
        $id = $_GET['id'];

        // Mengambil data piket berdasarkan ID
        $query = mysqli_query($db, "SELECT * FROM jadwal_piket WHERE id_piket='$id'");
        $data = mysqli_fetch_assoc($query);

        if (isset($_POST['update'])){
            // Mengupdate data piket ke database
            mysqli_query($db,"UPDATE jadwal_piket SET
            hari = '$_POST[hari]',
            nama_piket = '$_POST[nama_piket]',
            jam = '$_POST[jam]'
            WHERE id='$id'");

            echo "Data piket telah diperbarui";
            echo "<script>window.location='pengguna.php'</script>";
        }
        ?>

        <form action="" method="post">
            <label for="hari">Hari:</label><br>
            <input type="text" name="hari" id="hari" autocomplete="off" placeholder="Masukkan data piket ..." value="<?php echo $data['hari']; ?>"><br>

            <label for="nama_piket">Nama Piket:</label><br>
            <input type="text" name="nama_piket" id="nama_piket" autocomplete="off" placeholder="Massukkan data ..." value="<?php echo $data['nama_piket']; ?>"><br>

            <label for="jam">Jam:</label><br>
            <input type="text" name="jam" id="jam" autocomplete="off" placeholder="Masukkan jam ..." value="<?php echo $data['jam']; ?>"><br>

            <button type="submit" name="update">Perbarui Data</button>
        </form> 

        <a href="pengguna.php" class="ambatukam">Kembali</a><br><br>
    </div>
</body>
</html>
