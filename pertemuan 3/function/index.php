<?php

// luas persegi 1
$sisi1 = 5;
$luas = $sisi1 * $sisi1;
echo $luas;


// luas persegi 2
$sisi2 = 7;
$luas = $sisi2 * $sisi2;
echo "<br>" . $luas;

// fungsi tanpa parameter
function sayHello()
{
  return "halo kamu";
}

// fungsi untuk menghitung luas persegi
function luasPersegi($sisi = 5)
{
  return $sisi * $sisi;
}

// fungsi untuk menghitung luas kubus
function luasKubus($sisi)
{
  return 6 * luasPersegi($sisi);
}

// echo luasPersegi(5) . "<br>";
// echo luasPersegi(9);

echo luasKubus(6);
