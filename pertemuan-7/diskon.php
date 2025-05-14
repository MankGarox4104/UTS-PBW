<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2, h3 {
            text-align: center;
            color: #333;
        }
        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #28a745;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background: #218838;
        }
        .output {
            background: #e9ffe9;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pembayaran UKT Mahasiswa</h2>
        <form method="post">
            NPM: <input type="text" name="npm" required>
            Nama: <input type="text" name="nama" required>
            Prodi: <input type="text" name="prodi" required>
            Semester: <input type="number" name="semester" required>
            Biaya UKT (Rp): <input type="number" name="biaya" required>
            <input type="submit" name="submit" value="Hitung Pembayaran">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $npm = $_POST['npm'];
            $nama = strtoupper($_POST['nama']);
            $prodi = strtoupper($_POST['prodi']);
            $semester = $_POST['semester'];
            $biaya = $_POST['biaya'];

            $diskon = 0;
            if ($biaya >= 5000000) {
                $diskon = 10;
                if ($semester > 8) {
                    $diskon = 15;
                }
            }

            $potongan = $biaya * ($diskon / 100);
            $totalBayar = $biaya - $potongan;

            echo "<div class='output'>";
            echo "<h3>Luaran yang diharuskan</h3>";
            echo "NPM : $npm<br>";
            echo "NAMA : $nama<br>";
            echo "PRODI : $prodi<br>";
            echo "SEMESTER : $semester<br>";
            echo "BIAYA UKT : Rp. " . number_format($biaya, 0, ',', '.') . ",-<br>";
            echo "DISKON : $diskon%<br>";
            echo "YANG HARUS DIBAYAR : Rp. " . number_format($totalBayar, 0, ',', '.') . ",-<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
