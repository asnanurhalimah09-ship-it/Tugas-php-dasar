<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        .kotak {
            background-color: white;
            width: 400px;
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

        label {
            color: #a64d79;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #f4a6c1;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #d96c9b;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .tombol {
            background-color: #f4a6c1;
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
    <h3>Form Pesan Mahasiswa</h3>
    <form action="hasil_pesan.php" method="post">
        <label>Nama :</label>
        <input type="text" name="nama" required>
        <label>Kelas :</label>
        <input type="text" name="kelas" required>
        <label>Pesan / Kesan :</label>
        <textarea name="pesan" rows="5" required></textarea>

            <div class="tengah">
                <button type="submit">Kirim Pesan</button>
            </div>
    </form>

        
        <div class="center">
            <a href="index.php" class="tombol"> Kembali</a>
        </div>
    </div>
</body>
</html>