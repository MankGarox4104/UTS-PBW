<?php
// switch case
$hari = "Senin";

switch($hari){
    case "Senin":
        echo "Hari Pertama Kerja!<br>";
        break;
    case "Jumat":
        echo "Solat Jumat";
        break;
    case "Minggu":
        echo "Libur Akhir Pekan";
        break;
    default:
    echo "Hari Biasa";
}

//for loop
for ($i=1; $i<=5; $i++){
    echo "Angka ke-$i"."<br>";
}

$buah = ["Apel", "Jeruk", "Mangga"];
for ($p=0; $p<count($buah); $p++){
    echo $buah[$p]. "<br>";
}

//while loop
$nil = 1;
while($nil<=5){
    echo "Nilai: ". $nil. "<br>";
    $nil++;
}

//foreach loop
$mhs = [
    "10001" => "Andi",
    "10002" => "Budi",
    "10003" => "Citra"
];
foreach ($mhs as $nim => $nama){ 
    echo "NIM: ". $nim.", Nama: ". $nama."<br>";
}

//ternary operator
$umur = 18;
$status = ($umur >=17)? "Dewasa": "Anak-anak";
echo $status;

//include & require
include 'header.php';
require 'menu.php';
?>