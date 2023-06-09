<?php
require "koneksi2.php";

$jadwal_piket = null; // Initialize the variable

if (isset($_GET['id'])) {
    $id_piket = $_GET['id'];
    $query = "SELECT * FROM jadwal_piket WHERE id_piket = '$id_piket'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) > 0) {
        $jadwal_piket = mysqli_fetch_assoc($result);
    } else {
        echo "ID tidak ditemukan.";
        exit;
    }
}

if (isset($_POST['update'])) {
    $id_piket = $_POST['id_piket'];
    $hari = $_POST['hari'];
    $nama_piket = $_POST['nama_piket'];
    $jam = $_POST['jam'];

    $query = "UPDATE jadwal_piket SET
                hari = '$hari',
                nama_piket = '$nama_piket',
                jam = '$jam'
              WHERE id_piket = '$id_piket'";

    if (mysqli_query($db, $query)) {
        echo "Data pengguna telah diperbarui";
        echo "<script>window.location='jadwal-piket.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
    <link rel="stylesheet" href="ubahpiket.css">
</head>
<body>
    <h1>Edit Data Pengguna</h1>
    <form action="" method="post">
        <input type="hidden" name="id_piket" value="<?php echo isset($jadwal_piket['id_piket']) ? $jadwal_piket['id_piket'] : ''; ?>">
        <label for="hari">hari:</label><br>
        <input type="text" name="hari" id="hari" autocomplete="off" value="<?php echo isset($jadwal_piket['hari']) ? $jadwal_piket['hari'] : ''; ?>"><br>

        <label for="nama_piket">Username:</label><br>
        <input type="text" name="nama_piket" id="nama_piket" autocomplete="off" value="<?php echo isset($jadwal_piket['nama_piket']) ? $jadwal_piket['nama_piket'] : ''; ?>"><br>

        <label for="jam">jam:</label><br>
        <input type="text" name="jam" id="jam" autocomplete="off" value="<?php echo isset($jadwal_piket['jam']) ? $jadwal_piket['jam'] : ''; ?>"><br>

        <button type="submit" name="update">Update Data</button>
    </form>
</body>
</html>
