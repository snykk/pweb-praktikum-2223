<?php

require_once 'App/init.php';

// $produk1 = new Buku(judul: "Atomic Habits", penulis: "James Clear", penerbit: "Gramed", harga: 90000, jmlHalaman: 367);
// $produk2 = new Game("Resident Evil", "F. Sambalado", "Sony Computer", 10000,  50, 0);

// $cetakProduk = new CetakInfoProduk;
// $cetakProduk->tambahProduk ($produk1);
// $cetakProduk->tambahProduk ($produk2);
// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
