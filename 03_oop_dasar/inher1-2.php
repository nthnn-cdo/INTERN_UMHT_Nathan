<?php

class makan{
    public $namamakanan, 
    $namaminuman,
    $koki, 
    $resep,
    $harga,
    $jmlhidangan,
    $jmlpersediaan;

    public function __construct( $namamakanan = "nama makanan", $namaminuman = "nama minuman", $koki = "koki",
    $resep = "resep", $harga = 0, $jmlhidangan = 0, $jmlpersediaan = 0)  {
        $this->namamakanan = $namamakanan;
        $this->namaminuman = $namaminuman;
        $this->koki = $koki;
        $this->resep = $resep;
        $this->harga = $harga;
        $this->jmlhidangan = $jmlhidangan;
        $this->jmlpersediaan = $jmlpersediaan;

    }

    public function getmakan(){
        return "$this->namamakanan, $this->namaminuman, $this->koki, $this->resep";
    }

    public function getinfomakan() {
        $str = "{$this->namamakanan} | {$this->getmakan()}  (Rp. {$this->harga})";
        return $str;
    }
}


    class list1 extends makan{
        public function getinfomakan() {
            $str = "list 1 : {$this->namamakanan} | {$this->getmakan()}  (Rp. {$this->harga}) - ($this->jmlhidangan) hidangan.";
            return $str;

        }
    }

    class list2 extends makan{
        public function getinfomakan(){
            $str = "list 2 : {$this->namamakanan} | {$this->getmakan()}  (Rp. {$this->harga}) - ($this->jmlpersediaan) tersedia.";
            return $str;

        }
    }



    class cetakinfomakan{
        public function cetak( makan $makan ){
            $str = "{$makan->namamakanan} | {$makan->getmakan()}, (Rp. {$makan->harga})";
            return $str;
        }
    }

$makan1 = new list1( "Nasi Goreng", "Es teh", "pedil", "nasi di goreng", 10000, 10, 30);
$makan2 = new list2( "cumi tepung", "air putih", " igay", "cumi di tepungin", 5000, 4,10);

echo $makan1->getinfomakan();
echo "<br>";
echo $makan2->getinfomakan();