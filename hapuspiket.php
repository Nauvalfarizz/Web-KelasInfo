<?php
include 'koneksi2.php';

if (isset($_GET['deleteid_piket'])) {
    $id = $_GET['deleteid_piket'];
    $sql = "DELETE FROM jadwal_piket WHERE id_piket = $id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('Location: jadwal-piket.php');
        exit;
    } else {
        die(mysqli_error($db));
    }
}
?>
