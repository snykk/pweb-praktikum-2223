<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // method yang pertama kali dieksekusi ketika melakukan instansiasi obyek
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penerbit = $penerbit;
    $this->penulis = $penulis;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    // <nama penulis>, <nama harga>
    return "{$this->penulis} , {$this->harga}";
  }
}

$produk1 = new Produk("Atomic Habits", "James Clear", "Gramed", 90000);

$produk2 = new Produk("Resident Evil", "F. Sambalado", "Sony Computer", 10000);

var_dump($produk1);
echo "<br>";
var_dump($produk2);
