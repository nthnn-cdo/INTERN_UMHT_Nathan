<?php

class makan{
    public $namamakanan, 
    $namaminuman,
    $koki, 
    $resep;

    protected $harga;

    public function __construct( $namamakanan = "nama makanan", $namaminuman = "nama minuman", $koki = "koki",
    $resep = "resep", $harga = 0)  {
        $this->namamakanan = $namamakanan;
        $this->namaminuman = $namaminuman;
        $this->koki = $koki;
        $this->resep = $resep;
        $this->harga = $harga;

    }

    public function getmakan(){
        return "$this->namaminuman, $this->koki, $this->resep";
    }

    public function getinfomakan() {
        $str = "{$this->namamakanan} | {$this->getmakan()}  (Rp. {$this->harga})";
        return $str;
    }
}


    class list1 extends makan{
        public $jmlhidangan;

        public function __construct( $namamakanan = "nama makanan", $namaminuman = "nama minuman", $koki = "koki",
        $resep = "resep", $harga = 0, $jmlhidangan = 0){

            parent::__construct($namamakanan, $namaminuman, $koki,
            $resep, $harga);

            $this->jmlhidangan = $jmlhidangan;

        }

        public function getinfomakan() {
            $str = "list 1 : ". parent::getinfomakan() ." - ($this->jmlhidangan) hidangan.";
            return $str;

        }
    }

    class list2 extends makan{
        public $jmlhidangan;

        public function __construct( $namamakanan = "nama makanan", $namaminuman = "nama minuman", $koki = "koki",
        $resep = "resep", $harga = 0, $jmlpersediaan = 0 ){
            parent::__construct($namamakanan, $namaminuman, $koki,
            $resep, $harga);

            $this->jmlpersediaan = $jmlpersediaan;
        }

        public function getinfomakan(){
            $str = "list 2 :  ". parent::getinfomakan()." ~ ($this->jmlpersediaan) tersedia.";
            return $str;

        }
    }



    class cetakinfomakan{
        public function cetak( makan $makan ){
            $str = "{$makan->namamakanan} | {$makan->getmakan()}, (Rp. {$makan->harga})";
            return $str;
        }
    }

$makan1 = new list1( "Nasi Goreng", "Es teh", "pedil", "nasi di goreng", 10000, 10);
$makan2 = new list2( "cumi tepung", "air putih", " igay", "cumi di tepungin", 5000,10);

echo $makan1->getinfomakan();
echo "<br>";
echo $makan2->getinfomakan();
echo "<hr>";

echo $makan2->getharga();