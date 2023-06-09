<?php
session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

        <body>

        <!-- page login -->
        <div class="page-login">

        <!-- box -->
        <div class="box box-login">

        <!-- box header -->
        <div class="box-header text-center">
            login
</div>
        
        <!-- box body -->
        <div class="box-body">
        
        <!-- form login -->
<form action=""method="post">

<div class="form-group">
    <label>Masukkan username</label>
    <input type="text" name="user" place holder="username" class="input-control"> 
</div>

<div class="form-group">
    <label>Masukkan password</label>
    <input type="password" name="pass" place holder="password"  class="input-control"> 
</div>

  <center><input type="submit" name="submit" value="login"class="btn"></center>

</form>
<?php

if(isset($_POST['submit'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

 
$cek = mysqli_query(    $conn, "select * from pengguna where username = '" .$user."' ");
    if(mysqli_num_rows($cek) > 0){

        $d = mysqli_fetch_object($cek);
        if($pass == $d->password){

            $_session['status_login'] = true;
            $_session['uid']          =$d->id;
            $_session['uname']        =$d->nama;

              echo "<script>window.location = 'index.php'</script>";

        }else{
            echo '<div class= "allert allert-error">password salah</div>';
        }

    }else{
        echo '<div class= "allert allert-error">username tidak ditemukan</div>';
    }
    
    }

?>

</div>

        <!-- box footer -->
        <div class="box-footer text-center">
            <a href="index.php">halaman utama</a>
</div>

</div>

</div>

</body>
</html>
