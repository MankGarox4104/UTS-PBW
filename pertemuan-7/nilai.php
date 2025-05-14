<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f5f5f5;
        }
        .container {
            max-width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 15px;
            width: 100%;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #e6ffe6;
            border: 1px solid #b2ffb2;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Penilaian</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br>
        Nilai: <input type="number" name="nilai" required><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $predikat = "";
        $status = "";

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = "B";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = "C";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = "D";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = "E";
        } else {
            $predikat = "Tidak valid";
        }

        // Menentukan status
        if ($predikat == "A" || $predikat == "B" || $predikat == "C") {
            $status = "Lulus";
        } elseif ($predikat == "D" || $predikat == "E") {
            $status = "Tidak Lulus";
        } else {
            $status = "-";
        }

        echo "<div class='hasil'>";
        echo "<strong>Luaran yang diharapkan</strong><br>";
        echo "Nama : " . htmlspecialchars($nama) . "<br>";
        echo "Nilai : " . htmlspecialchars($nilai) . "<br>";
        echo "Predikat : " . $predikat . "<br>";
        echo "Status : " . $status;
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
