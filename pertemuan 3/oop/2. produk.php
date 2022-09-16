<?php

class Produk
{
  public $judul = "judul",
    $penerbit = "penerbit",
    $penulis = "penulis",
    $harga = 0;

  public function getLabel()
  {
    // <nama penulis>, <nama penerbit>
    return "{$this->penulis} , {$this->penerbit}";
  }
}

$produk1 = new Produk();
$produk1->judul = "Atomic Habits";
$produk1->penerbit = "Gramedia";
$produk1->penulis = "James Clear";
$produk1->harga = 90000;

// var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Resident Evil";
$produk2->penulis = "F. Sambalado";
$produk2->penerbit = "Sony Computer";
$produk2->harga = 450000;

// var_dump($produk2);

echo "Buku: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
