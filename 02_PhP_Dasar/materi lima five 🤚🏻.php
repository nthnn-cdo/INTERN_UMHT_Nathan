<?php
// array
// membuat array
// $hari = array("senin", "selasa", "Rabu");
// $bulan = ["januari", "Februari", "Maret"];
// $arr = [100, "teks", true];
// menampilkan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
//menampilkan 1 elemen pada array
// echo $arr[0];
?>




<?php
// Array numerik
$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Array asosiatif
$mahasiswa = [
    [
        "nama" => "mario gosonk",
        "nisn" => "021237",
        "email" => "mario@gmail.com",
        "jurusan" => "DKV",
    ],
    [
        "nama" => "bruno",
        "nisn" => "023124",
        "email" => "brunopluto@gmail.com",
        "jurusan" => "Singer",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
        .gambar {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Latihan Array Numerik</h1>
    <?php foreach ($angka as $row) : ?>
        <?php foreach ($row as $col) : ?>
            <div class="kotak"><?= $col; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NISN: <?= $mhs["nisn"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
