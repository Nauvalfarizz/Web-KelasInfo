<?php
// isi nama host, username mysql, dan ppassword mysql 
$databaseHost = "localhost";
$databaseName = "kelasinfo";
$databaseUsername = "root";
$databasePassword = "";

$db = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);

function tampil($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while($data = mysqli_fetch_assoc($result)){
        $rows[] = $data;
    }

    return $rows;
}

function CariK($keyword){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM pengguna where nama LIKE '%$keyword%'");

    return $query;

 }

 function tambahDataK($data){ 
    global $db;
    $nama = $data ["nama"];
    $username = $data ["username"];
    $password = $data ["password"];
    $level = $data ["level"];

    mysqli_query($db, "INSERT INTO pengguna VALUES ('','$nama','$username','$password','$level')");

    
    return mysqli_affected_rows($db);
}
function ubahDataP($data, $id)
{
    global $conn;
    $id_pelajaran = $data["id_pelajaran"];
    $hari = $data["hari"];
    $nama_pelajaran = $data["nama_pelajaran"];
    $jam = $data["jam"];

    mysqli_query($conn, "UPDATE jadwal_pelajaran SET hari = '$hari', nama_pelajaran = '$nama_pelajaran', jam = '$jam' WHERE id_pelajaran = '$id_pelajaran'");

    return mysqli_affected_rows($conn);
}
