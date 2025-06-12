<?php
   include 'koneksi_db.php'; 


   $search_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
   $search_email = isset($_GET['email']) ? $_GET['email'] : '';
   $search_alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';
   $search_telepon = isset($_GET['telepon']) ? $_GET['telepon'] : '';


   $query = "SELECT * FROM pelanggan WHERE 1=1";
   if (!empty($search_nama)) {
       $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
   }
   if (!empty($search_email)) {
       $query .= " AND Email LIKE '%" . $conn->real_escape_string($search_email) . "%'";
   }
   if (!empty($search_alamat)) {
       $query .= " AND Alamat LIKE '%" . $conn->real_escape_string($search_alamat) . "%'";
   }
   if (!empty($search_telepon)) {
       $query .= " AND Telepon LIKE '%" . $conn->real_escape_string($search_telepon) . "%'";
   }


   $result = $conn->query($query);
?>