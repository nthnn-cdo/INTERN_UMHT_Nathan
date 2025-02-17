<?php

class makan{
    public $namamakanan = "nama makanan", 
    $namaminuman = "nama minuman",
    $koki = "nama koki", 
    $resep = "resep",
    $harga = 0;

    public function getmakan(){
        return "$this->namamakanan, $this->namaminuman";
    }
}

// $makan1 = new makan();
// $makan1->namamakanan = "Nasi Goreng";
// var_dump($makan1);

// $makan2 = new makan();
// $makan2->namaminuman = "Es Teh";
// $makan2->tambahminuman = "huhu";
// var_dump($makan2);

$makan3 = new makan();
$makan3->namamakanan = "Nasi Goreng";
$makan3->namaminuman = "Es Teh";
$makan3->koki = "pedil";
$makan3->resep = "nasi di goreng";
$makan3->harga = 10000;

$makan4 = new makan();
$makan4->namamakanan = "cumi tepung";
$makan4->namaminuman = "air putih";
$makan4->koki = "igay";
$makan4->resep = "cumi di tepungin";
$makan4->harga = 5000;

echo "list: ".$makan3->getmakan();
echo "<br>";
echo "list:".$makan4->getmakan();