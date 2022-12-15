<?php

/*
 * Überprüfen ob ein Wert vom Typ Array ist
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.php.net/manual/en/function.is-array.php
 */

// Funktionsaufruf von 'is_array'
// mit einem Array als erstes Argument für den Parameter '$value'
// Der Rückgabewert von 'is_array' ist wenn, der Typ vom Wert ein Array ist ein Boolean mit dem Wert 'TRUE'
// Der Rückgabewert von 'is_array' wird in der Variable '$is_array_true' gespeichert
$is_array_true = is_array( [ 'Hallo', 'Welt' ] );


// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$is_array_true', welche als Argument mitgegeben wird
var_dump( $is_array_true );

// Funktionsaufruf von 'is_array'
// mit dem Integer '1' als erstes Argument für den Parameter '$value'
// Der Rückgabewert von 'is_array' ist wenn, der Typ vom Wert kein Array ist ein Boolean mit dem Wert 'FALSE'
// Der Rückgabewert von 'is_array' wird in der Variable '$is_array_true' gespeichert
$is_array_false = is_array( 1 );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$is_array_false', welche als Argument mitgegeben wird
var_dump( $is_array_false );