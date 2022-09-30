<?php
// Content
// 1. declare array using 3 ways
// 2. associative array
// 3. foreach
// 4. multidimensional array
// 5. array function
//   - is_array()
//   - count()
//   - sort()
//   - shuffle()
//   - explode()
//   - extract()
//   - compact()
//   - reset()
//   - end()


// ==============> ARRAY <=================
// $nama1 = "Ana";
// $nama2 = "Boby";
// $nama3 = "Citra";
// // ...
// $nama100 = "Bangkit";
$name_list1 = ["Ana", "Boby", "Citra", "Bangkit"];
$name_list2 = array("Ana", "Boby", "Citra", "Bangkit");
$name_list3[0] = "Ana";
$name_list3[1] = "Boby";
$name_list3[2] = "Citra";
$name_list3[7] = "Bangkit";

// print_r($name_list1);
// echo "<br>";
// print_r($name_list2);
// echo "<br>";
// print_r($name_list3[4]);

// ==============> ARRAY ASSOCIATIVE <=================
$person1 = ["name" => "Ana", "age" => 28, "department" => "IT"];
$person2 = array("name" => "Ana", "age" => 28, "department" => "IT");
$person3["name"] = "ana";
$person3["age"] = 28;
$person3["department"] = "IT";
// print_r($person1);
// echo "<br>";
// print_r($person2);
// echo "<br>";
// print_r($person3);


// ==============> FOREACH <===============

// array biasa
$name_list = ["Ana", "Boby", "Citra", "Bangkit"];

// foreach ($name_list as $name) {
//   echo "Hallo $name <br>";
// }

// array associative
$person_data =  ["name" => "Ana", "age" => 28, "department" => "IT"];

// foreach ($person_data as $key => $value) {
//   echo "$key: $value <br>";
// }

// array assoc multidimensional
$person_data = [
  ["name" => "Ana", "age" => 28, "department" => "IT"],
  ["name" => "Boby", "age" => 29, "department" => "IT"],
  ["name" => "Citra", "age" => 19, "department" => "IT"],
];

// foreach ($person_data as $person) {
//   foreach ($person as $kategori => $data) {
//     echo "$kategori: $data <br>";
//   }

//   echo "====================== <br>";
// }

$number_list = [
  1, 2, 3, 4, 5, 1, 4, 5, 1,
  [
    3, 4, 5, 5, 1, [2, 3, 4, 5, 3],
  ],
];

// foreach ($number_list as $i) {
//   if (is_array($i)) {
//     foreach ($i as $j) {
//       if (is_array($j)) {
//         foreach ($j as $k) {
//           echo "$k <br>";
//         }
//       } else {
//         echo "$j <br>";
//       }
//     }
//   } else {
//     echo "$i <br>";
//   }
// }

// =================> ARRAY FUNCTION <===================

// is_array()
$unknown_var = "siapakah aku";
$unknown_var = [1, 2, 3];

// if (is_array($unknown_var)) {
//   echo "This var is an array";
// } else {
//   echo "This var is not an array";
// }

// count()
// $name_list = ["Ana", "Boby", "Citra", "Bangkit"];
// $length = count($name_list);

// for ($index = 0; $index < $length; $index++) {
//   echo $name_list[$index] . "<br>";
// }

$person_data = [
  ["name" => "Ana", "age" => 28, "department" => "IT"],
  ["name" => "Boby", "age" => 29, "department" => "IT"],
  ["name" => "Citra", "age" => 19, "department" => "IT"],
];

// for ($index = 0; $index < count($person_data); $index++) {
//   foreach ($person_data[$index] as $key => $value) {
//     echo "$key: $value <br>";
//   }

//   if ($index != count($person_data) - 1) {
//     echo "====================== <br>";
//   }
// }

// sort()
$number_list = [1, 4, 5, 1, 4, 6, 2, 7];
$name_list = ["Citra", "Ana", "Bobby"];
sort($number_list);
sort($name_list);

// var_dump($number_list);
// var_dump($name_list);

// shuffle()
$numbers = range(1, 20);
shuffle($numbers);

// foreach ($numbers as $number) {
//   echo "$number ";
// }

// explode()
$persons = "ana,boby,citra,rehan,lintang,sekar";

$listOfPersons = explode(",", $persons);
$newArr = [];
for ($index = 0; $index < count($listOfPersons); $index++) {
  $newArr["name{$index}"] = $listOfPersons[$index];
}
// header("Content-Type: application/json");
// echo json_encode($newArr);

// header("Refresh:5,url=https://www.google.com");
// echo "You will be redirect to www.google.com in 5 seconds";

// extract()

$name = "Fikri";
$persons = [
  "name" => "Ana",
  "age" => 20,
  "department" => "IT",
];

// extract($persons, EXTR_PREFIX_SAME, "person");
// echo $person_name;

// compact()
$hero_name = "Granger";
$hero_role = "Marksman";
$hero_power = 2000;

$hero_data = compact("hero_power", "hero_name", "hero_role");

// header("Content-Type: application/json");
// echo json_encode($hero_data);

// var_dump($hero_data);

// reset()

$array = array('step one', 'step two', 'step three', 'step four');

// // by default, the pointer is on the first element
// echo current($array) . "<br />\n"; // "step one"

// // skip two steps
// next($array);
// next($array);
// echo current($array) . "<br />\n"; // "step three"

// // reset pointer, start again on step one
// reset($array);
// echo current($array) . "<br />\n"; // "step one"

// end()
$name_list = ["Citra", "Ana", "Bobby"];
// echo end($name_list);

// array_slice()
$number_list = range(1, 10);
shuffle($number_list);

$sublist1 = array_slice($number_list, 0, 3);
$sublist2 = array_slice($number_list, 3, 3);
$sublist3 = array_slice($number_list, 6, 4);


$newArr  = [$sublist1, $sublist2, $sublist3];

header("Content-Type: application/json");
echo json_encode($newArr);
