<?php
include 'connect.php'; 

if (!$db) {
    die("❌ Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $npm = trim($_POST['npm']);
    $nama = trim($_POST['nama']);
    $prodi = trim($_POST['prodi']);
    $semester = trim($_POST['semester']);
    $ukt = trim($_POST['ukt']);

    if (empty($npm) || empty($nama) || empty($prodi) || empty($semester) || empty($ukt)) {
        die("⚠️ Semua field harus diisi!");
    }

    $stmt = mysqli_prepare($db, "INSERT INTO mahasiswa (NPM, Nama, Prodi, Semester, Ukt) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("❌ Gagal menyiapkan statement: " . mysqli_error($db));
    }

    mysqli_stmt_bind_param($stmt, "sssis", $npm, $nama, $prodi, $semester, $ukt);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "❌ Gagal menyimpan data: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "⚠️ Form belum disubmit dengan benar.";
}
?>
