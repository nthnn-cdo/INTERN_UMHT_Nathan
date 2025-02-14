<?php

class makanan{
    public $judul, 
    $koki, 
    $jenismakanan, 
    $jenisminuman, 
    $harga;

    public function __construct( $judul = "judul", $koki = "koki", $jenismakanan ="jenis makanan",
     $jenisminuman ="jenis minuman", $harga =0){
        $this->judul = $judul;
        $this->koki = $koki;
        $this->jenismakanan = $jenismakanan;
        $this->jenisminuman = $jenisminuman;
        $this->harga = $harga;
    }

    public function hytam(){
        return "$this->koki, $this->jenismakanan";
    }
}

class cetakinfomakan{
    public function cetak( makanan $makanan ){
        $str = "{$makanan->judul} | {$makanan->hytam()} (Rp. {$makanan->harga})";
        return $str;
    }
}

$makanan1 = new makanan("jual makanan","padil","lumpia daging kuda","air putih","1000");
$makanan2 = new makanan("jual makanan","gwe","puding coklat pak hambali","bawa sendiri","200000000");
echo "makanan india:".$makanan1->hytam();
echo "<br>";
echo "makanan manusia:" .$makanan2->hytam();
echo "<br>";
$infomakanan1 = new cetakinfomakan();
echo $infomakanan1->cetak($makanan1);

?>