<?php

// Data mahasiswa 
$mahasiswa = [
    [
    "nim" => "2501817",
    "nama" => "Qeisya Dwi Herawan",
    "jurusan" => "Pendiddikan Sistem dan Teknologi Informasi",
    "email" => "qeisyaa@gmail.com", 
    "nilai" => 88
    ],
    [
    "nim" => "2500000",
    "nama" => "Deni Hermawan",
    "jurusan" => "Pendiddikan Sistem dan Teknologi Informasi",
    "email" => "bapakdeni@gmail.com", 
    "nilai" => 75
    ],
    [
    "nim" => "2502947",
    "nama" => "Asna Nur Halimah",
    "jurusan" => "Pendiddikan Sistem dan Teknologi Informasi",
    "email" => "asnanurhalimah@gamil.com", 
    "nilai" => 88
    ],
    [
    "nim" => "2502222",
    "nama" => "Meisya Zea Almahyra",
    "jurusan" => "Pendiddikan Sistem dan Teknologi Informasi",
    "email" => "bayizea@gmail.com", 
    "nilai" => 95
    ],
    [
    "nim" => "2508888",
    "nama" => "M Kurnia Latief",
    "jurusan" => "Pendiddikan Sistem dan Teknologi Informasi",
    "email" => "latief@gamil.com", 
    "nilai" => 55
    ]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        h3 {
            color: #a64d79;
            text-align: center;
        }

        p {
            text-align: center;
            color: #777;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #f4a6c1;
            color: white;
            padding: 12px;
            border: 1px solid #e8b7c9;
        }

        td {
            padding: 10px;
            border: 1px solid #e8b7c9;
            text-align: center;
        }

        tr:hover {
            background-color: #fff5f8;
        }

        a {
            text-decoration: none;
        }

        .tombol {
            background-color: #d96c9b;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            display: inline-block;
        }

        .tombol:hover {
            background-color: #b94f7e;
        }

        .menu {
            text-align: center;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($mahasiswa as $data): ?>
            <?php

            if($data["nilai"] >= 80){
                $grade = "A";
            }elseif($data["nilai"] >= 70){
                $grade = "B";
            }elseif($data["nilai"] >= 60){
                $grade = "C";
            }else{
                $grade = "D";
            }

            if($data["nilai"] >= 70){
                $status = "Lulus";
            }else{
                $status = "Tidak Lulus";
            }
            ?>

            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data["nim"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["jurusan"]; ?></td>
                <td><?php echo $data["nilai"]; ?></td>
                <td><?php echo $grade; ?></td>
                <td><?php echo $status; ?></td>

                <td>
                    <a class="tombol"
                       href="detail.php?nim=<?php echo urlencode($data["nim"]); ?>&nama=<?php echo urlencode($data["nama"]); ?>&jurusan=<?php echo urlencode($data["jurusan"]); ?>&email=<?php echo urlencode($data["email"]); ?>&nilai=<?php echo urlencode($data["nilai"]); ?>&grade=<?php echo urlencode($grade); ?>&status=<?php echo urlencode($status); ?>">
                        Lihat Detail
                    </a>
                </td>
            </tr>

            <?php $no++; ?>

        <?php endforeach; ?>

    </table>

    <div class="menu">
        <a href="form_pesan.php" class="tombol">Isi Form Pesan</a>
    </div>

</body>
</html>
