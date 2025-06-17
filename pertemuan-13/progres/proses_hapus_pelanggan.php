<?php
include 'koneksi_db.php'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE dp FROM detail_pesanan dp INNER JOIN pesanan p ON dp.Pesanan_ID = p.ID WHERE p.Pelanggan_ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("DELETE FROM pesanan WHERE Pelanggan_ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus'); window.location='daftar_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.location='daftar_pelanggan.php';</script>";
    }

    // Tutup statement
    $stmt->close();
} else {
    echo "<script> </script>";
}


// Tutup koneksi
$conn->close();