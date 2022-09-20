<?php

// echo "Halo";

echo "<br>";
// $ + nama variable + value
$nama = "Ahmad";
$umur = 12;
$umur2 = 12.2;
$isOld = false;

// echo $nama . " " . $umur;

// Array -> Index & Asossiatif
// Index -> 0, 1, 2, 3, dst
// / Assosiatiff -> "nama", "umur"

// Index
$data1 = array(1, 2, 3, 4, 5);
$data2 = [1, 2, 3, 4, 5];

// // Asossiatif
$data3 = array("nama" => "Budi", "nama" => "Mamat");
$data4 = ["nama" => "Budi", "nama" => "Mamat"];

// echo "<br>";
// echo $data1[0];
// echo "<br>";
// echo $data2[0];
// echo "<br>";
// echo $data3["nama"];
// echo "<br>";
// echo $data4["nama"];
// echo "<br>";

// OPERATOR ARITMATIKA
// +, -, /, *, **

// $a = 10;
// $b = 2;

// echo $a + $b;
// echo "<br>";
// echo $a - $b;
// echo "<br>";
// echo $a / $b;
// echo "<br>";
// echo $a * $b;
// echo "<br>";
// echo $a ** $b;
// echo "<br>";

// OPERATOR LOGICAL
// <, >, <=, >=, ==, ===

// $a = 10;
// $b = "10";
// echo $a == $b;

$a = 10;

// if ($a > 10) {
//     echo "A";
// } else if ($a < 10) {
//     echo "B";
// } else {
//     echo "C";
// }

// switch ($a) {
//     case 1:
//         echo "Senin";
//         break;
//     case 2:
//         echo "Selasa";
//         break;
//     default: //Else 
//         echo "Tidak valid";
// }

// FOR, WHILE, FOREACH
// Deklarasi
// Kondisi
// Expression

// FOREACH
// $container = ["nama" => "Budi", "umur" => "20", "NIM" => "202410102310"];
// foreach ($container as $i => $val) {
//     echo $i;
//     echo $val;
//     echo "<br>";
// }

// $b = 0;
// while ($b < 10) {
//     $b++;
//     if ($b == 5) {
//         continue;
//     }
//     if ($b == 8) {
//         break;
//     }
//     echo "<br>";
//     echo "coba" . $b;
// }

// public, private, protected, dkk

// function tambah($a, $b) {
//     return $a + $b;
// }

// echo tambah(10, 20);