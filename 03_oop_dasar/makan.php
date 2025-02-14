<?php

class makanan{
    public $judul = "judul", 
    $koki = "koki", 
    $jenismakanan = "jenis makanan", 
    $jenisminuman = "jenis minuman", 
    $harga = 0;

    public function hytam(){
        return "$this->koki, $this->jenismakanan";
    }
}

$makanan1 = new makanan();
$makanan1->judul = "jual makanan";
$makanan1->koki = "padil";
$makanan1->jenismakanan = "lumpia daging kuda";
$makanan1->jenisminuman = "air putih";
$makanan1->harga = 1000;
echo "makanan india:".$makanan1->hytam();

// echo "igar : $makanan1->judul, $makanan1->jenismakanan";

echo "<br>";


$makanan2 = new makanan();
$makanan2->judul = "jual makanan";
$makanan2->koki = "gwe";
$makanan2->jenismakanan = "puding coklat";
$makanan2->jenisminuman = "bawa sendiri";
$makanan2->harga = 2000000000   ;

echo "makanan manusia:" .$makanan2->hytam();

?>