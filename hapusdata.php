<?php

include 'koneksi2.php';
if (isset($_GET['deleteid_pengguna'])) {   
    $id = $_GET['deleteid_pengguna'];
    $sql = "DELETE FROM `pengguna` where id= $id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('location:pengguna.php');
    } else {
        die(mysqli_error($db));
    }
}

?>