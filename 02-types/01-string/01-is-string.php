<?php

/*
 * Überprüfen ob ein Wert vom Typ String ist
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/language.types.string.php
 * https://www.php.net/manual/en/function.is-string.php
 */

// Funktionsaufruf von 'is_string'
// mit dem String 'Hallo' als erstes Argument für den Parameter '$value'
// Der Rückgabewert von 'is_string' ist wenn, der Typ vom Wert ein String ist ein Boolean mit dem Wert 'TRUE'
// Der Rückgabewert von 'is_string' wird in der Variable '$is_string_true' gespeichert
$is_string_true = is_string( 'Hallo' );


// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$is_string_true', welche als Argument mitgegeben wird
var_dump( $is_string_true );

// Funktionsaufruf von 'is_string'
// mit dem Integer '1' als erstes Argument für den Parameter '$value'
// Der Rückgabewert von 'is_string' ist wenn, der Typ vom Wert kein String ist ein Boolean mit dem Wert 'FALSE'
// Der Rückgabewert von 'is_string' wird in der Variable '$is_string_true' gespeichert
$is_string_false = is_string( 1 );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$is_string_false', welche als Argument mitgegeben wird
var_dump( $is_string_false );