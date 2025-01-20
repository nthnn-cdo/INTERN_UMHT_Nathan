<?php

// pertemuan 2 - PhP dasar
// sintaks 

// standar output
// echo,print
// print_r
// var_dump

//  penulisan sintaks
//  1. PhP didalam HTML
//  2. HTML didalam PHP

// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "nutnut";
// echo 'halo, nama saya $nama';

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan ="nutnut";
// $nama_belakang = "satria";
// echo $nama_depan ." " . $nama_belakang;

// assignment
// =, +=, -= , *=, /=, %=, .=
// $x =1;
// $x += 5;
// echo $x;
// $nama = "adi";
// $nama .= " ";
// $nama .= "didy";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "5");

// identitas
// ===, !==
// var_dump(1 === "1")

// logika
// &&, ||, !
// // $x = 10;
// var_dump($x < 20 && $x % 2 == 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "<h1>Halo, Selamat datang nutnut</h1>"
    // ?>
    <!-- <h1>Halo, selamat datang <?php echo "$nama";?></h1>
    // <p><?php echo "ini adalah paragraf";?></p> -->
</body>
</html>