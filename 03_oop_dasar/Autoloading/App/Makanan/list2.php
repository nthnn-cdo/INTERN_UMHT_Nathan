<?php
  class list2 extends Makan implements infomakanan{
    public $jmlhidangan;

    public function __construct( $judulmakanan = "nama makanan", $judulminuman = "nama minuman", $koki = "koki",
    $resep = "resep", $harga = 0, $jmlpersediaan = 0 ){
        parent::__construct($judulmakanan, $judulminuman, $koki,
        $resep, $harga);

        $this->jmlpersediaan = $jmlpersediaan;
    }

    public function getinfo(){
        $str = "{$this->judulmakanan} | {$this->getmakan()}  (Rp. {$this->harga})";
        return $str;
    }
    
    public function getinfomakan(){
        $str = "list 2 :  ". $this->getinfo()." ~ ($this->jmlpersediaan) tersedia.";
        return $str;

    }
}
    