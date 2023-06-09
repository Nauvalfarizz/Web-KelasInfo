
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data pengguna</title>
        <link rel="stylesheet" href="tambahdatapengguna.css">
        
</head>
<div class="content update">
        <h1>Tambah data pengguna</h1>
        <form action="" method="post">
            <label for="nama_pengguna"> nama_pengguna : </label><br>
            <input type="nama" name="nama" id="nama" autocomplete="off" placeholder="Masukkan nama ..."><br>
            <label for="username"> username : </label><br>
            <input type="username" name= "username" username="username" id="username" autocomplete="off" placeholder="Massukkan username ..."><br>
            <label for="password"> password : </label><br>
            <input type="password" name="password" passord="password" id="password" autocomplete="off" placeholder="Masukkan password ..."><br>
            <label for="level"> level : </label><br>
            <select name="level">
  <option value="pilih">Pilih</option>
  <option value="admin">admin</option>
  <option value="user">user</option>
</select>

                <button type="submit" name="tambah"> Tambah Data</Button>

        </form> 
        <a href="pengguna.php" class="ambatukam">Kembali</a><br><br>
</div>
<?php
    include "koneksi2.php";

    if (isset($_POST['tambah'])){
        mysqli_query($db,"INSERT pengguna set
        nama = '$_POST[nama]',
        username = '$_POST[username]',
        password = '$_POST[password]',
        level = '$_POST[level]'");

    
        echo "Data pengguna telah tersimpan";
        echo "<script>window.location=pengguna.php</script>";
    }


?>
</html>

<link rel="stylesheet" href="tambahdatapengguna.css">
