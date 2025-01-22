<?php
// Ini adalah Komentar
// ini juga komnetar
/* ini adalah komentator*/
//  Shortcut Ctrl + Slash
// Testing
// aku mw
// Dan aku ingin

// Pertemuan 2 dasar PHP
// Sintaks php

// standar output
// Echo, Print
// Print_r
// Var_dump

echo "gugugaga<br>";  
print "paus<br>";
print_r("apa aja<br>");
var_dump ("aja apa <br>");
$Nama="Nathan";
$Sambung="sikma";

// output angka
echo 6281388477180

/* Penggunaan Kutip tergantung kata kata yang ada di dalam String */

// Sintaks PHP didalam HTML dan sebaliknya
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Halo Selamat datang dude <?php echo "$Nama"; ?> <h1>
            <?php echo "<h1> halo nama saya gok gok </h1>"; ?>
            <p> <?php var_dump ("$Nama"); ?></p>
    </body>
    </html>

    <?php
    // Operator Aritmatika
    // + - * / %

    // Menggabungkan String
    echo $Nama . " " . $Sambung;

    // Assignment
    // =, +=, -=, *=, /=, %=, .=,

    $gugu="<br>mario";
    $gugu.=" ";
    $gugu.="hytam";

    echo "$gugu";
    // Perbandingan
    // <, >, <=, >=, ==
    var_dump (1== "1");

    // Identitas 
    // === !==
    var_dump (1=== "1");

    
    // Logika
    // &&, ||, !
    $x= 30; 
    var_dump($x < 20 || $x % 2 == 0);

    ?>