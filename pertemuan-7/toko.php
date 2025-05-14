<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .container {
            background-color: #fff;
            border: 1px solid #444;
            padding: 20px 30px;
            width: 500px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            font-weight: bold;
        }
        hr {
            border: none;
            border-top: 2px solid #333;
            margin: 10px 0 20px 0;
        }
        .data {
            font-size: 16px;
            line-height: 1.6;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
    <hr>

    <?php
    // Array harga barang
    $barang = ["Keyboard" => 150000];

    // Variabel jumlah beli
    $jumlahBeli = 2;

    // Konstanta pajak
    define("PAJAK", 0.10);

    // Hitung total harga sebelum pajak
    $namaBarang = "Keyboard";
    $hargaSatuan = $barang[$namaBarang];
    $totalSebelumPajak = $hargaSatuan * $jumlahBeli;

    // Hitung pajak dan total bayar
    $pajak = $totalSebelumPajak * PAJAK;
    $totalBayar = $totalSebelumPajak + $pajak;
    ?>

    <div class="data">
        Nama Barang: <?= $namaBarang ?><br>
        Harga Satuan: Rp <?= number_format($hargaSatuan, 0, ',', '.') ?><br>
        Jumlah Beli: <?= $jumlahBeli ?><br>
        Total Harga (Sebelum Pajak): Rp <?= number_format($totalSebelumPajak, 0, ',', '.') ?><br>
        Pajak (10%): Rp <?= number_format($pajak, 0, ',', '.') ?><br>
        <span class="bold">Total Bayar: Rp <?= number_format($totalBayar, 0, ',', '.') ?></span>
    </div>
</div>

</body>
</html>
