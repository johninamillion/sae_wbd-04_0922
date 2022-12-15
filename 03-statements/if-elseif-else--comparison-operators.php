<?php

// Link: https://www.php.net/manual/de/language.operators.comparison.php
// Link: https://www.php.net/manual/de/types.comparisons.php

$var1 = 0; // 0 entspricht dem Boolean False, 1 entpsricht dem Boolean True
$var2 = FALSE;

//// Vergleich vom Wert
//if ( !$var1 ) {
//    echo 'if !$var1 <br>';
//}
//
//// Vergleich vom Wert
//if ( $var1 == FALSE ) {
//    echo 'if $var1 == FALSE <br>';
//}
//
//// Vergleich von Wert und Typ
//if ( $var1 === FALSE ) {
//    echo 'if $var1 === FALSE <br>';
////}
//
//// Negativ vergleich vom Wert
//if ( $var1 != FALSE ) {
//    echo 'if $var1 != FALSE <br>';
//}
//
//// Negativ vergleich vom Wert und vom Typen
//if ( $var1 !== FALSE ) {
//    echo 'if $var1 !== FALSE <br>';
//}

$name = "Alex";

if ( empty( $name ) === FALSE ) {
    echo "Hallo {$name}, herzlich Willkommen!";
}
