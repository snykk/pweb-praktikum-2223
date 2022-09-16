<?php

class Game extends Produk implements InfoProduk
{
    public $lamaMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $lamaMain = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->lamaMain = $lamaMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->lamaMain} Jam.";
        return $str;
    }
}
