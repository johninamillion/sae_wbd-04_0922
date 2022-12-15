<?php

// Link: https://www.php.net/manual/en/language.operators.arithmetic.php

// 12 % 5 => 2
// 9 % 5 => 4
// 14 % 5 => 4

// Gebe die Zahlen 1 bis 30 aus per Leerzeichen getrennt
// Ersetze alle Zahlen die durch 5 und 3 teilbar sind durch C
// Ersetze alle Zahlen die durch 5 teilbar sind durch B
// Ersetze alle Zahlen die durch 3 teilbar sind durch A

$string = "";

for ( $i = 1; $i <= 30; $i++ ) {
    if ( $i % 5 === 0 && $i % 3 === 0 ) {
        // = überschreibt oder schreib den string
        // .= hängt einen weiteren string an einen bestehenden string
        $string .= "C ";
    }
    else if ( $i % 5 === 0 ) {
        $string .= "B ";
    }
    else if ( $i % 3 === 0 ) {
        $string .= "A ";
    }
    else {
        $string .= "{$i} ";
    }
}

$array = [];

for ( $i = 1; $i <= 30; $i++ ) {
    if ( $i % 5 === 0 && $i % 3 === 0 ) {
//        array_push( $array, 'C' );
        $array[] = 'C';
    }
    else if ( $i % 5 === 0 ) {
        $array[] = 'B';
    }
    else if ( $i % 3 === 0 ) {
        $array[] = 'A';
    }
    else {
        $array[] = $i;
    }
}

$arr_string =  implode( ' ', $array );

// Test
if ( "1 2 A 4 B A 7 8 A B 11 A 13 14 C 16 17 A 19 B A 22 23 A B 26 A 28 29 C" === $arr_string ) {
    echo "TEST BESTANDEN! DU HAST DEN JOB!";
}
else {
    echo "NOPE!";
}