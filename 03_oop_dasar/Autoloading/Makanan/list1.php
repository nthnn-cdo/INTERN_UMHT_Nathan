<?php
    class list1 extends Makan implements infomakanan{
        public $jmlhidangan;

        public function __construct( $judulmakanan = "nama makanan", $judulminuman = "nama minuman", $koki = "koki",
        $resep = "resep", $harga = 0, $jmlhidangan = 0){

            parent::__construct($judulmakanan, $judulminuman, $koki,
            $resep, $harga);

            $this->jmlhidangan = $jmlhidangan;

        }
        public function getinfo(){
            $str = "{$this->judulmakanan} | {$this->getmakan()}  (Rp. {$this->harga})";
            return $str;
        }

        public function getinfomakan() {
            $str = "list 1 : ". $this->getinfo() ." - ($this->jmlhidangan) hidangan.";
            return $str;

        }
    }

