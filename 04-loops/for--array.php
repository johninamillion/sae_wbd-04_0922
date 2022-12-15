<?php

// Array kann Werte von verschiedenen Typen enthalten
// Array können verschachtelt werden
// Arrays sind per default numerisch und beginnen beim Index 0

$array = [ 'Apfel', 'Ananas', 'Banane', 'Birne', 'Erdbeere', 'Kiwi' ];

$length = count( $array );

for ( $i = 0; $i < $length; $i++ ) {
    $value = $array[ $i ];

    if ( $value[0] === 'A' ) {
        echo "<p style='color: red'>{$value}</p>";
    }
    else if ( $value[0] === 'B' ) {
        echo "<p style='color: blue'>{$value}</p>";
    }
    else {
        echo "<p>{$value}</p>";
    }

//    $begins_with_a = $value[0] === 'A';
//    $begins_with_b = $value[0] === 'B';
//
//    switch( TRUE ) {
//        case $begins_with_a:
//            echo "<p style='color: red'>{$value}</p>";
//            break;
//        case $begins_with_b:
//            echo "<p style='color: blue'>{$value}</p>";
//            break;
//        default:
//            echo "<p>{$value}</p>";
//            break;
//    }
}