<?php

abstract class Makan{
    protected $judulmakanan, 
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

    abstract public function getinfo();
}
