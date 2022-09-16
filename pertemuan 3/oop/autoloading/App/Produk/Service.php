<?php

class Service
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk; // simbol [] yaitu untuk menambahkan element baru kedalam array
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $produk) {
            $str .= "- {$produk->getInfoProduk()} <br>";
        }

        return $str;
    }
}
