<?php

// $str = "2:1";
// $hasil = explode(":", $str);
// echo print_r($hasil);



// $pages_array[] = (object) array('slug' => 'xxx', 'title' => 'etc');
$tes = [
   'Arsenal' => 27,
   'Chealsea' => 2,
   'Madrid' => 98,
];

// $aja = ['Arsenal', 'Chealsea', 'Madrid'];

// $object = new stdClass();
// foreach ($aja as $key => $value) {
//    $object->$key = $value;
// }

$tes['Madrid'] += 2;
// $tes['Madrid'] += 100;



// echo $tes['Madrid'];



$aja = ['Arsenal', 'Chealsea', 'Madrid'];
$new = ['Arsenal', 'Chealsea', 'Madrid'];


$object = new stdClass();

foreach ($aja as $value) {
   // $new[$value] = 0;
   // echo $value . PHP_EOL;
}

// echo print_r($new);
// echo $new['Arsenal'];


// -------------------
$apa = [
   'Arsenal' => 272,
   'Chealsea' => 5,
   'Madrid' => 98,
];

$kosong = [];

// $hasil = [272, 2, 98];

// print_r($hasil);

// $nilai = array_values($apa);
// rsort($nilai);
// echo $nilai[0];
// print_r($nilai);

// -------------------
// usort($apa, function ($a, $b) {
//    $hasil = ($a < $b) ? 1 : -1;
//    return (object) 


//    echo $a . PHP_EOL;
//    echo "tes1" . PHP_EOL;
//    echo $b . PHP_EOL;
//    echo "tes2" . PHP_EOL;
// });

// print_r($apa);


// -------------------
// $count = count($apa);
// echo $count;
// print_r($apa);

// for ($i = 0; $i < $count; $i++) {
//    for ($j = $i + 1; $j < $count; $j++) {
//       if ($apa[$i] > $apa[$j]) {
//          $temp = $apa[$i];
//          $apa[$i] = $apa[$j];
//          $apa[$j] = $temp;
//       }
//    }
// }

// print_r($apa);


// -------------------
// $apa = [
//    'Arsenal' => 272,
//    'Chealsea' => 5,
//    'Madrid' => 98,
// ];

// $oldKeyApa = array_keys($apa);
// $oldValueApa = array_values($apa);

// $new = [];

// usort($apa, function ($a, $b) {
//    return ($a < $b) ? 1 : -1;
// });

// foreach ($apa as $key1 => $value1) {
//    foreach ($oldValueApa as $key2 => $value2) {
//       if ($value1 == $value2) {
//          $attr = $oldKeyApa[$key2];
//          $new[$attr] = $value1;
//          break;
//       }
//    }
// }


// print_r($apa);
// print_r($new);


// -------------------
$papan = [
   ['J', 'Y', 'B', 'Y', 'Q', 'V', 'W', 'G', 'B', 'Q', 'F', 'D', 'D', 'U', 'L', 'H', 'M'],
   ['D', 'G', 'O', 'C', 'G', 'V', 'N', 'K', 'Z', 'C', 'R', 'U', 'B', 'A', 'O', 'I', 'K'],
   ['U', 'G', 'E', 'U', 'H', 'E', 'W', 'J', 'W', 'T', 'O', 'Y', 'N', 'U', 'M', 'N', 'V'],
   ['N', 'H', 'U', 'R', 'D', 'B', 'R', 'J', 'I', 'V', 'U', 'I', 'T', 'P', 'G', 'H', 'W'],
   ['I', 'H', 'H', 'O', 'O', 'I', 'E', 'M', 'Z', 'W', 'T', 'J', 'M', 'D', 'T', 'S', 'V'],
   ['T', 'M', 'V', 'O', 'I', 'P', 'O', 'U', 'A', 'N', 'B', 'E', 'D', 'X', 'T', 'W', 'X'],
   ['E', 'Z', 'H', 'B', 'B', 'Q', 'A', 'U', 'E', 'N', 'W', 'C', 'W', 'C', 'B', 'O', 'N'],
   ['D', 'L', 'U', 'S', 'A', 'D', 'F', 'G', 'N', 'R', 'Y', 'Y', 'G', 'W', 'W', 'S', 'R'],
   ['K', 'H', 'Y', 'I', 'I', 'R', 'R', 'M', 'N', 'I', 'P', 'H', 'A', 'B', 'R', 'W', 'P'],
   ['I', 'T', 'Q', 'M', 'S', 'A', 'H', 'I', 'M', 'I', 'R', 'U', 'N', 'Z', 'Y', 'H', 'S'],
   ['N', 'E', 'T', 'H', 'E', 'R', 'L', 'A', 'N', 'D', 'S', 'H', 'U', 'N', 'K', 'E', 'Z'],
   ['G', 'F', 'K', 'L', 'N', 'L', 'A', 'G', 'U', 'T', 'R', 'O', 'P', 'B', 'I', 'U', 'E'],
   ['D', 'C', 'P', 'G', 'O', 'G', 'G', 'A', 'R', 'U', 'P', 'U', 'E', 'O', 'P', 'K', 'M'],
   ['O', 'J', 'B', 'T', 'D', 'N', 'T', 'A', 'X', 'O', 'B', 'X', 'Z', 'M', 'J', 'C', 'C'],
   ['M', 'J', 'F', 'P', 'N', 'S', 'L', 'L', 'X', 'B', 'V', 'C', 'Y', 'W', 'T', 'K', 'E'],
   ['R', 'X', 'I', 'S', 'I', 'I', 'Z', 'W', 'A', 'M', 'K', 'S', 'L', 'N', 'H', 'V', 'S'],
   ['A', 'O', 'J', 'O', 'A', 'E', 'G', 'T', 'X', 'M', 'C', 'Z', 'P', 'C', 'I', 'O', 'U']
];

$tes = ['J', 'Y', 'B', 'Y', 'Q', 'V', 'W', 'G', 'B', 'Q', 'F', 'D', 'D', 'U', 'L', 'H', 'M'];
$kosong = ['a'];

// foreach ($tes as $key => $value) {
//    echo $value . PHP_EOL;
// }

if (empty($kosong)) {
   echo "ya";
}