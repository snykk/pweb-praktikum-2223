<?php

class Produk
{
  public $judul,
    $penerbit,
    $penulis,
    $harga,
    $lamaMain,
    $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaMain = 0, $jmlHalaman = 0)
  {
    $this->judul = $judul;
    $this->penerbit = $penerbit;
    $this->penulis = $penulis;
    $this->harga = $harga;
    $this->lamaMain = $lamaMain;
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getLabel()
  {
    // <nama penulis>, <nama penerbit>
    return "{$this->penulis} , {$this->penerbit}";
  }

  // public function getInfoLengkap()
  // {
  //   // Buku : Atomic Habits | James Clear, Gramedia (Rp 90000) - 456 Halaman
  //   $str = "{$this->tipe} : {$this->getLabel()} ({$this->harga})";

  //   if ($this->tipe == "Buku") {
  //     $str .= " {$this->jmlHalaman} Halaman";
  //   } else if ($this->tipe = "Game") {
  //     $str .= " {$this->lamaMain} Jam";
  //   }

  //   return $str . "<br>";
  // }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str . "<br>";
  }
}

class Buku extends Produk
{
  public function getInfoProduk()
  {
    $str = "Buku : {$this->getLabel()} (Rp. {$this->harga}) {$this->jmlHalaman}";

    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->getLabel()} (Rp. {$this->harga}) {$this->lamaMain}";

    return $str;
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

$produk1 = new Buku(judul: "Atomic Habits", penulis: "James Clear", penerbit: "Gramed", harga: 90000, jmlHalaman: 367);

$produk2 = new Game("Resident Evil", "F. Sambalado", "Sony Computer", 10000,  50, 0);

$service = new Service();
// echo $service->cetakInfoProduk($produk1);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();
