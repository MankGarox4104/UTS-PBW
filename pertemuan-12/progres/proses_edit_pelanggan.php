<?php
include 'koneksi_db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];


$stmt = $conn->prepare("UPDATE Pelanggan SET Nama=?, Email=?, Telepon=?, Alamat=? WHERE ID=?");
$stmt->bind_param("ssssi", $nama, $email, $telepon, $alamat, $id);


   if ($stmt->execute()) {
       echo "<script>alert('Data berhasil diperbarui'); window.location='daftar_pelanggan.php';</script>";
   } else {
       echo "<script>alert('Gagal memperbarui data'); window.location='daftar_pelanggan.php';</script>";
   }
}
?>