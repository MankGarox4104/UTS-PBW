<?php
   include 'koneksi_db.php';

   if (isset($_GET['id']) && is_numeric($_GET['id'])) {
       $id = $_GET['id'];

       $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
       $stmt->bind_param("i", $id);


       if ($stmt->execute()) {
           echo "<script>alert('Data berhasil dihapus'); window.location='daftar_pelanggan.php';</script>";
       } else {
           echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.location='daftar_pelanggan.php';</script>";
       }

       $stmt->close();
   } else {
       echo "<script> </script>";
   }

   $conn->close();