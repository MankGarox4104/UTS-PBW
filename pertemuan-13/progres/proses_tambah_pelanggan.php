<?php
include 'koneksi_db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Email = $_POST['Email'];
    $Telepon = (string) $_POST['Telepon'];


    $stmt = $conn->prepare("INSERT INTO pelanggan (Nama, Alamat, Email, Telepon) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Nama, $Alamat, $Email, $Telepon);


    if ($stmt->execute()) {
        echo "<script>
           alert('Pelanggan berhasil ditambahkan!');
           window.location.href = 'tambah_pelanggan.php';
       </script>";
    } else {
        echo "<script>
           alert('Gagal menambahkan pelanggan: " . addslashes($stmt->error) . "');
           window.location.href = 'tambah_pelanggan.php';
       </script>";
    }
}
?>