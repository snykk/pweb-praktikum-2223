<?php

class Produk
{
  public $judul,
    $penerbit,
    $penulis,
    $harga,
    $tipe,
    $lamaMain,
    $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $tipe, $lamaMain = 0, $jmlHalaman = 0)
  {
    $this->judul = $judul;
    $this->penerbit = $penerbit;
    $this->penulis = $penulis;
    $this->harga = $harga;
    $this->tipe = $tipe;
    $this->lamaMain = $lamaMain;
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getLabel()
  {
    // <nama penulis>, <nama penerbit>
    return "{$this->penulis} , {$this->penerbit}";
  }

  public function getInfoLengkap()
  {
    // Buku : Atomic Habits | James Clear, Gramedia (Rp 90000) - 456 Halaman
    $str = "{$this->tipe} : {$this->getLabel()} (Rp. {$this->harga})";

    if ($this->tipe == "Buku") {
      $str .= " {$this->jmlHalaman} Halaman";
    } else if ($this->tipe = "Game") {
      $str .= " {$this->lamaMain} Jam";
    }

    return $str . "<br>";
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

// terdapat 2 perbedaan dalam melempar parameter
$produk1 = new Produk(judul: "Atomic Habits", penulis: "James Clear", penerbit: "Gramed", harga: 90000, tipe: "Buku", jmlHalaman: 367);

$produk2 = new Produk("Resident Evil", "F. Sambalado", "Sony Computer", 450000, "Game", 50, 0);

$service = new Service();
// echo $service->cetakInfoProduk($produk1);

echo $produk1->getInfoLengkap();
echo $produk2->getInfoLengkap();
