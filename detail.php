<?php

//Mengecek apakah data GET tersedai
if(
    isset($_GET["nim"]) &&
    isset($_GET["nama"]) &&    
    isset($_GET["jurusan"]) &&    
    isset($_GET["email"]) &&    
    isset($_GET["nilai"]) &&    
    isset($_GET["grade"]) &&    
    isset($_GET["status"])     
){
    $nim = $_GET["nim"];
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email = $_GET["email"];
    $nilai = $_GET["nilai"];
    $grade = $_GET["grade"];
    $status = $_GET["status"];
}else{
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        .kotak {
            background-color: white;
            width: 450px;
            max-width: 90%;
            margin: 40px auto;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #f4a6c1;
        }

        h3 {
            text-align: center;
            color: #a64d79;
        }

        li {
            margin-bottom: 12px;
        }

        .tombol {
            background-color: #d96c9b;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .tengah {
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="kotak">
    <h3>Detail Mahasiswa</h3>
    <hr>
    <ul>
        <li>NIM : <?php echo htmlspecialchars($nim, ENT_QUOTES, 'UTF-8'); ?></li>
        <li>Nama : <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?></li>
        <li>Jurusan : <?php echo htmlspecialchars($jurusan, ENT_QUOTES, 'UTF-8'); ?></li>
        <li>Nilai : <?php echo htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8'); ?></li>
        <li>Grade : <?php echo htmlspecialchars($grade, ENT_QUOTES, 'UTF-8'); ?></li>
        <li>Status : <?php echo htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?></li>
    </ul>
</hr>
<div class="tengah">
    <a href="index.php" class="tombol">Kembali</a>
</div>
</div>
</body>
</html>