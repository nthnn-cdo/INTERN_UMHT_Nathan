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
        return "$this->namamakanan, $this->namaminuman, $this->koki, $this->resep";
    }
}

    class cetakinfomakan{
        public function cetak( makan $makan ){
            $str = "{$makan->namamakanan} | {$makan->getmakan()}, (Rp. {$makan->harga})";
            return $str;
        }
    }

$makan1 = new makan( "Nasi Goreng", "Es teh", "pedil", "nasi di goreng", 10000);
$makan2 = new makan( "cumi tepung", "air putih", " igay", "cumi di tepungin", 5000);
echo "list: ".$makan1->getmakan();
echo "<br>";
echo "list:".$makan2->getmakan();
echo "<br>";
$infomakan1 = new cetakinfomakan();
echo $infomakan1->cetak($makan1);