<?php
require "koneksi2.php";

if (isset($_GET['id'])) {
    $id_pengguna = $_GET['id'];
    $query = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'";
    $result = mysqli_query($db, $query);
    $pengguna = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $query = "UPDATE pengguna SET
                nama = '$nama',
                username = '$username',
                password = '$password',
                level = '$level'
              WHERE id_pengguna = '$id_pengguna'";

    if (mysqli_query($db, $query)) {
        echo "Data pengguna telah diperbarui";
        echo "<script>window.location='pengguna.php';</script>";
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
    <link rel="stylesheet" href="ubahdata.css">
</head>
<body>
    <h1>Edit Data Pengguna</h1>
    <form action="" method="post">
        <input type="hidden" name="id_pengguna" value="<?php echo $pengguna['id_pengguna']; ?>">
        <label for="nama">Nama Pengguna:</label><br>
        <input type="text" name="nama" id="nama" autocomplete="off" value="<?php echo $pengguna['nama']; ?>"><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" autocomplete="off" value="<?php echo $pengguna['username']; ?>"><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" autocomplete="off" value="<?php echo $pengguna['password']; ?>"><br>

        <label for="level">Level:</label><br>
        <select name="level">
            <option value="pilih">Pilih</option>
            <option value="admin" <?php if ($pengguna['level'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="user" <?php if ($pengguna['level'] == 'user') echo 'selected'; ?>>user</option>
        </select><br>

        <button type="submit" name="update">Update Data</button>
    </form>
</body>
</html>

