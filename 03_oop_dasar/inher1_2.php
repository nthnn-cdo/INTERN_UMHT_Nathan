<?php

class makanan{
    public $judul, 
    $koki, 
    $jenismakanan, 
    $jenisminuman, 
    $harga,
    $jmlmakanan,
    $jmlminuman;

    public function __construct( $judul = "judul", $koki = "koki", $jenismakanan ="jenis makanan",
    $jenisminuman ="jenis minuman", $harga = 0, $jmlmakanan = 0, $jmlminuman = 0){
        $this->judul = $judul;
        $this->koki = $koki;
        $this->jenismakanan = $jenismakanan;
        $this->jenisminuman = $jenisminuman;
        $this->harga = $harga;
        $this->jmlmakanan = $jmlmakanan;
        $this->jmlminuman = $jmlminuman;
    }

    public function hytam(){
        return "$this->koki, $this->jenismakanan";
    }

    public function getinfomakanan(){
        $str = "{$this->judul} | {$this->hytam()} (Rp. {$this->harga})";
        return $str;
    }
}

class minuman extends makanan {
    public function getinfomakanan(){
        $str = "minuman: {$this->judul} | {$this->hytam()} (Rp. {$this->harga}) ~ {$this->jmlminuman} botol";
        return $str;
    }
}

class makan extends makanan{
    public function getinfomakan(){
        $str = "makanan: {$this->judul} | {$this->hytam()} (Rp. {$this->harga})- {$this->jmlmakanan} porsi";
        return $str;
    }
}


class cetakinfomakan{
    public function cetak( makanan $makanan ){
        $str = "{$makanan->judul} | {$makanan->hytam()} (Rp. {$makanan->harga})";
        return $str;
    }
}

$makanan1 = new makan("jual makanan","padil","lumpia daging kuda","air putih",1000, 1,0);
$makanan2 = new minuman("jual minuman","gwe","susu","bawa sendiri",200000000, 0,3);

echo $makanan1->getinfomakanan();
echo "<br>";
echo $makanan2->getinfomakanan();
?>