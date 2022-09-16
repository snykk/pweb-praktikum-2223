<?php

class Produk
{
  public $judul,
    $penerbit,
    $penulis,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penerbit = $penerbit;
    $this->penulis = $penulis;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    // <nama penulis>, <nama penerbit>
    return "{$this->penulis} , {$this->penerbit}";
  }
}

class Service
{
  public function cetakInfoProduk(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

    return $str . "<br>";
  }
}

$produk1 = new Produk("Atomic Habits", "James Clear", "Gramed", 90000);

$produk2 = new Produk("Resident Evil", "F. Sambalado", "Sony Computer", 450000);

$service = new Service();
echo $service->cetakInfoProduk($produk1);
