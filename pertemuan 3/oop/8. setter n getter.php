<?php

// Jualan Produk
// Buku
// Game
class Produk
{
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $dikson = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setjudul($judul)
  {
    // if (!is_string($judul)) {
    //     throw new Exception("judul harus string");
    // }
    $this->judul = $judul;
  }

  public function getjudul()
  {
    return $this->judul;
  }

  public function setpenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getpenulis()
  {
    return $this->penulis;
  }

  public function setpenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getpenerbit()
  {
    return $this->penerbit;
  }

  public function setharga($harga)
  {
    $this->harga = $harga;
  }

  public function getharga()
  {
    return (1 - ($this->diskon) / 100) * $this->harga;
  }

  public function setDiskon($Diskon)
  {
    $this->diskon = $Diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Buku extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Buku : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $lamaMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $lamaMain = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->lamaMain = $lamaMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " - {$this->lamaMain} Jam.";
    return $str;
  }
}

class Service
{
  public function cetakInfoProduk(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

    return $str;
  }
}

$service = new Service();
// echo $service->cetakInfoProduk($produk1);

$produk1 = new Buku(judul: "Atomic Habits", penulis: "James Clear", penerbit: "Gramed", harga: 90000, jmlHalaman: 367);
$produk2 = new Game("Resident Evil", "F. Sambalado", "Sony Computer", 10000,  50, 0);

$produk1->judul = "absdf";

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(10);
echo $produk2->getharga();
echo "<hr>";

$produk1->setjudul("Konoha");
echo $produk1->getjudul();
echo "<br>";

$produk1->setpenulis("Hirusen");
echo $produk1->getpenulis();
