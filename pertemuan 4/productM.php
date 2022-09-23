<?php

// MODEL untuk produk
abstract class Product
{
    public $nama;
    public $harga;
    public $deksripsi;

    public function __construct($nama, $harga, $deskripsi)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->deksripsi = $deskripsi;
    }
}
