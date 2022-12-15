<?php

// Array kann Werte von verschiedenen Typen enthalten
// Array können verschachtelt werden
// Arrays sind per default numerisch und beginnen beim Index 0


$array = [
    'gelb',
    'rot'
];

$assoc_array = [
    'Banane' => 'Gelb',
    'Erdbeere' => 'Rot'
];

echo $array[ 0 ];
echo $assoc_array['Banane'];


exit();

$array = [ 'Apfel', 1, TRUE, NULL, [ 'a', 'b', 'c' ] ];
// 0 => 'Apfel'
// 1 => 1
// 2 => TRUE
// 3 => NULL
// 4 => [ 'a', 'b', 'c']

$assoc_array = [
    'Apfel' => 'rot',
    'Banane' => 'gelb',
    'Kiwi' => 'grün'
];

echo "<pre>";
var_dump( $array );
echo "</pre>";

echo "<br>";

echo "<pre>";
var_dump( $assoc_array );
echo implode ( ' ', $assoc_array );
echo "</pre>";
