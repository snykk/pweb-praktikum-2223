<?php

interface InfoProduk
{
  public function getInfoProduk();
  public function addAnotherMethod();
}

abstract class Produk
{
  protected $judul,
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

  abstract public function getInfo();
}

class Buku extends Produk implements InfoProduk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }

  public function getInfoProduk()
  {
    $str = "Buku : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }

  public function addAnotherMethod()
  {
  }
}

class Game extends Produk implements InfoProduk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $lamaMain = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $lamaMain;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
    return $str;
  }

  public function addAnotherMethod()
  {
  }
}

class CetakInfoProduk
{
  public $daftarProduk = array();

  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk; // simbol [] yaitu untuk menambahkan element baru kedalam array
  }

  public function cetakInfoProduk()
  {
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarProduk as $produk) {
      $str .= "- {$produk->getInfoProduk()} <br>";
    }

    return $str;
  }
}

$produk1 = new Buku(judul: "Atomic Habits", penulis: "James Clear", penerbit: "Gramed", harga: 90000, jmlHalaman: 367);
$produk2 = new Game("Resident Evil", "F. Sambalado", "Sony Computer", 10000,  70, 0);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetakInfoProduk();
