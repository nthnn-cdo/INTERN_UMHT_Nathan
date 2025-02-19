<?php
    class cetakinfomakan{
        public $daftarmakanan = [];

        public function tambahmakan(Makan $Makan) {
            $this->daftarmakanan[]= $Makan;
        }

        public function cetak(){
            $str = "DAFTAR MAKANAN : <br>";

            foreach( $this->daftarmakanan as $p){
                $str .= "- {$p->getinfomakan()} <br>";
            }



            return $str;
        }
    }