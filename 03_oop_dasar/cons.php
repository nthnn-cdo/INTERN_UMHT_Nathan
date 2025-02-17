<?php

class makan{
    public $namamakanan, 
    $namaminuman,
    $koki, 
    $resep,
    $harga;

    public function __construct( $namamakanan = "nama makanan", $namaminuman = "nama minuman", $koki = "koki",
    $resep = "resep", $harga = 0) {
        $this->namamakanan = $namamakanan;
        $this->namaminuman = $namaminuman;
        $this->koki = $koki;
        $this->resep = $resep;
        $this->harga = $harga;

    }

    public function getmakan(){
        return "$this->namamakanan, $this->namaminuman";
    }
}

$makan1 = new makan( "Nasi Goreng", "Es teh", "pedil", "nasi di goreng", 10000);
$makan2 = new makan( "cumi tepung", "air putih", " igay", "cumi di tepungin", 5000);
$makan3 = new makan("ikan rebus");
echo "list: ".$makan1->getmakan();
echo "<br>";
echo "list:".$makan2->getmakan();
echo "<br>";
var_dump($makan3);