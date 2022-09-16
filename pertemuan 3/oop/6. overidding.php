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

    return $str;
  }
}

class Buku extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Buku : " . parent::getInfoProduk() . " {$this->jmlHalaman} Halaman";

    return $str;
  }
}

class Game extends Produk
{
  public $lamaMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->lamaMain = $lamaMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " {$this->lamaMain} Jam";

    return $str;
  }
}

class Service
{
  public function cetakInfoProduk(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";

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
