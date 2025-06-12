<?php
    // $apiUrl = "https://low-merilyn-wignn-9201e186.koyeb.app//api/book/list";

    // $apiKey = "silvia";

    $var_nama = $_POST['nama'];
    $var_email = $_POST['email'];
    $var_nama = $_GET['nama'];

    $nila = 75;
    if ($nila >= 80) {
        echo "Nilai Anda A \n";
    } elseif ($nila >= 70) {
        echo "Nilai Anda B \n";
    } else {
        echo "Nilai Anda c \n";
    }

    $umur = 20;
    if ($umur >= 20) {
        echo "boleh memilih\n";
    } 


    if(!empty($_POST['nama'])){
        echo "Nama: " . htmlspecialchars($_POST['nama']);
    } else {
        echo "Data tidak lengkap!";
    }
?>


