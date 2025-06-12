<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form UKT</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
        }

        .wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        .form input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form button {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>

<body class="wrap">
    <div class="container">
        <form class="form" action="proses.php" method="POST">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="prodi">Prodi:</label>
            <input type="text" id="prodi" name="prodi" required>

            <label for="semester">Semester:</label>
            <input type="text" id="semester" name="semester" required>

            <label for="ukt">UKT (dalam Rupiah):</label>
            <input type="number" id="ukt" name="ukt" required>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
