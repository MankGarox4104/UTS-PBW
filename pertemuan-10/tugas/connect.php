<?php
$server = "localhost";
$username = "root";
$nama_database = "crud_php";

$db = mysqli_connect($server, $username, "", $nama_database);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>