<?php

/*
 * Position von einem String in einem String finden
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/language.types.string.php
 * https://www.php.net/manual/en/function.strpos.php
 */

$string = 'Hallo Welt!';

// Funktionsaufruf von 'strpos'
// mit der Variable '$string' als erstes Argument für den Parameter '$haystack'
// mit dem String 'Welt' als zweites Argument für den Parameter '$needle'
// 'strpos' gibt und bei einem Treffer die Position von 'Welt' in der Variable '$string' als Integer zurück
// Der Rückgabewert von 'strpos' wird in der Variable '$str_pos_int' gespeichert
$str_pos_int = strpos( $string, 'Welt' );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$str_post_int', welche als Argument mitgegeben wird
var_dump( $str_pos_int );

// Funktionsaufruf von 'strpos'
// mit der Variable '$string' als erstes Argument für den Parameter '$haystack'
// mit dem String 'World' als zweites Argument für den Parameter '$needle'
// 'strpos' gibt und bei einem fehlenden Treffer einen Boolean mit dem Wert 'FALSE' zurück
// Der Rückgabewert von 'strpos' wird in der Variable '$str_pos_false' gespeichert
$str_pos_false = strpos( $string, 'World' );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$str_post_false', welche als Argument mitgegeben wird
var_dump( $str_pos_false );