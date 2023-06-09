<?php

include 'koneksi2.php';
if (isset($_GET['deleteid_pelajaran'])) {   
    $id = $_GET['deleteid_pelajaran'];
    $sql = "DELETE FROM `jadwal_pelajaran` where id_pelajaran= $id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('location:jadwal-pelajaran.php');
    } else {
        die(mysqli_error($db));
}
}

?>