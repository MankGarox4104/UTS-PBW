<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            margin: 0;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        nav {
            text-align: center;
            margin-bottom: 30px;
        }

        nav a {
            text-decoration: none;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            text-align: center;
        }

        th {
            background-color: #f8fafc;
            font-weight: bold;
        }

        tbody tr:hover {
            background-color: #f1f5f9;
        }

        p {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <h2>Siswa yang Sudah Mendaftar</h2>
    </header>

    <nav>
        <a href="menambah.php">+ Tambah Mahasiswa Baru</a>
    </nav>

    <table>
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>UKT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($siswa['NPM']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Nama']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Prodi']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Semester']) . "</td>";
                echo "<td>Rp " . number_format($siswa['Ukt'], 0, ',', '.') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total Mahasiswa: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
