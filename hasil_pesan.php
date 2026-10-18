<?php

//cek apakah data POst tersedia
if(
    isset($_POST["nama"]) &&
    isset($_POST["kelas"]) &&
    isset($_POST["pesan"]) 
){
    $nama=$_POST["nama"];
    $kelas=$_POST["kelas"];
    $pesan=$_POST["pesan"];
}else{
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
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

        h4 {
            text-align: center;
            color: #d96c9b;
        }

        p {
            line-height: 1.8;
        }

        .tombol {
            background-color: #d96c9b;
            color: white;
            padding: 10p; 15px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .tombol:hover {
            background-color: #b94f7e;
        }

        .tengah {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="kotak">
    <h3>Hasil Pesan</h3>
    <h4>Pesan Berhasil Dikirim! Terima Kasih</h4>
    
    <hr>
    <p><b>Nama : </b> <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></P>
    <p><b>Kelas : </b> <?php echo htmlspecialchars($kelas, ENT_QUOTES, 'UTF-8') ?></P>
    <p><b>Pesan / Kesan : </b> <?php echo nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?></P>
    </hr>

    <div class="tengah">
    <a href="index.php" class="tombol">Kembeli ke Beranda</a>
    </div>
</div>
</body>
</html>