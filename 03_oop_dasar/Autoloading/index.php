<?php

require_once 'App/init.php';


$makan1 = new list1( "Nasi Goreng", "Es teh", "pedil", "nasi di goreng", 10000, 10);
$makan2 = new list2( "cumi tepung", "air putih", " igay", "cumi di tepungin", 5000,10);

$cetakmakan = new cetakinfomakan();
$cetakmakan->tambahmakan($makan1);
$cetakmakan->tambahmakan($makan2);
echo $cetakmakan->cetak();