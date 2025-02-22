<?php

class Makan{
    private $judulmakanan, 
    $judulminuman,
    $koki, 
    $resep,
    $harga,
    $diskon = 0;

    public function __construct( $judulmakanan = "nama makanan", $judulminuman = "nama minuman", $koki = "koki",
    $resep = "resep", $harga = 0)  {
        $this->judulmakanan = $judulmakanan;
        $this->judulminuman = $judulminuman;
        $this->koki = $koki;
        $this->resep = $resep;
        $this->harga = $harga;

    }

    public function setjudul( $judulmakanan ) {
        $this->judulmakanan = $judulmakanan;
    }

    public function setkoki( $koki ) {
        $this->koki = $koki;
    }

    public function getkoki(){
        return $this->koki;
    }

    public function setresep( $resep ){
        $this->resep = $resep;
    }

    public function getresep( $resep ){
        return $this->resep;
    }

    public function getjudulmakanan() {
        return $this->judulmakanan;
    }

    public function setdiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getdiskon(){
        return $this->diskon;
    }

    public function setharga( $harga ){
        $this->harga = $harga;
    }


    public function getharga() {
        return $this->harga - ($this->harga * $this->diskon / 90);
    }

    public function getmakan(){
        return "$this->judulminuman, $this->koki, $this->resep";
    }

    public function getinfomakan() {
        $str = "{$this->judulmakanan} | {$this->getmakan()}  (Rp. {$this->harga})";
        return $str;
    }
}


    class list1 extends Makan{
        public $jmlhidangan;

        public function __construct( $judulmakanan = "nama makanan", $judulminuman = "nama minuman", $koki = "koki",
        $resep = "resep", $harga = 0, $jmlhidangan = 0){

            parent::__construct($judulmakanan, $judulminuman, $koki,
            $resep, $harga);

            $this->jmlhidangan = $jmlhidangan;

        }

        public function getinfomakan() {
            $str = "list 1 : ". parent::getinfomakan() ." - ($this->jmlhidangan) hidangan.";
            return $str;

        }
    }

    class list2 extends Makan{
        public $jmlhidangan;

        public function __construct( $judulmakanan = "nama makanan", $judulminuman = "nama minuman", $koki = "koki",
        $resep = "resep", $harga = 0, $jmlpersediaan = 0 ){
            parent::__construct($judulmakanan, $judulminuman, $koki,
            $resep, $harga);

            $this->jmlpersediaan = $jmlpersediaan;
        }
    

        public function getinfomakan(){
            $str = "list 2 :  ". parent::getinfomakan()." ~ ($this->jmlpersediaan) tersedia.";
            return $str;

        }
    }



    class cetakinfomakan{
        public function cetak( Makan $Makan ){
            $str = "{$Makan->judulmakanan} | {$Makan->getmakan()}, (Rp. {$Makan->harga})";
            return $str;
        }
    }

$makan1 = new list1( "Nasi Goreng", "Es teh", "pedil", "nasi di goreng", 10000, 10);
$makan2 = new list2( "cumi tepung", "air putih", " igay", "cumi di tepungin", 5000,10);

echo $makan1->getinfomakan();
echo "<br>";
echo $makan2->getinfomakan();
echo "<hr>";

$makan2->setdiskon(0);
echo $makan2->getharga();
echo "<hr>";

$makan1->setkoki("guah");
echo $makan1->getkoki();
