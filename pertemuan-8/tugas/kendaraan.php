<?php
$jumlah_roda = 4;

switch ($jumlah_roda) {
    case 2:
        echo "Jenis kendaraan: Sepeda motor";
        break;
    case 3:
        echo "Jenis kendaraan: Bajaj";
        break;
    case 4:
        echo "Jenis kendaraan: Mobil";
        break;
    case 6:
        echo "Jenis kendaraan: Truk kecil";
        break;
    case 8:
    case 10:
    case 12:
        echo "Jenis kendaraan: Truk besar";
        break;
    default:
        echo "Jenis kendaraan tidak diketahui";
        break;
}
?>
