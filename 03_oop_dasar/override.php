<?php

class makanan{
    public $judul, 
    $koki, 
    $jenismakanan, 
    $jenisminuman, 
    $harga;

    public function __construct( $judul = "judul", $koki = "koki", $jenismakanan ="jenis makanan",
    $jenisminuman ="jenis minuman", $harga = 0,){
        $this->judul = $judul;
        $this->koki = $koki;
        $this->jenismakanan = $jenismakanan;
        $this->jenisminuman = $jenisminuman;
        $this->harga = $harga;
    }

    public function ok(){
        return "$this->koki, $this->jenismakanan";
    }

    public function getinfomakanan(){
        $str = "{$this->judul} | {$this->ok()} (Rp. {$this->harga})";
        return $str;
    }
}

class minuman extends makanan {
    public $jmlminuman;
    public function __construct( $judul = "judul", $koki = "koki", $jenismakanan ="jenis makanan",
    $jenisminuman ="jenis minuman", $harga = 0, $jmlminuman = 0){
        parent::__construct($judul = "judul", $koki = "koki", $jenisminuman ="jenis minuman",
        $jenisminuman ="jenis minuman", $harga = 0);

        $this->jmlminuman = $jmlminuman;
    }
    public function getinfomakanan(){
        $str = "minuman:". parent::getinfomakanan()." ~ {$this->jmlminuman} botol";
        return $str;
    }
}

class makan extends makanan{
    public $jmlmakanan;
    public function __construct($judul = "judul", $koki = "koki", $jenismakanan ="jenis makanan",
    $jenismakanan ="jenis makanan", $harga = 0, $jmlmakanan = 0){
        parent::__construct($judul = "judul", $koki = "koki", $jenismakanan ="jenismakanan",
        $jenismakanan = "jenis makanan", $harga = 0 );
        $this->jmlmakanan = $jmlmakanan;
    }
    public function getinfomakan(){
        $str = "makanan: ". parent::getinfomakanan()."- {$this->jmlmakanan} porsi";
        return $str;
    }
}


class cetakinfomakan{
    public function cetak( makanan $makanan ){
        $str = "{$makanan->judul} | {$makanan->ok()} (Rp. {$makanan->harga})";
        return $str;
    }
}

$makanan1 = new makan("jual makanan","padil","lumpia daging kuda","air putih",1000, 1);
$makanan2 = new minuman("jual minuman","gwe","susu","bawa sendiri",200000000,3);

echo $makanan1->getinfomakanan();
echo "<br>";
echo $makanan2->getinfomakanan();
?>