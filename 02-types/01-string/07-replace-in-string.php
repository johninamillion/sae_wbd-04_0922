<?php

/*
 * Teil eines Strings mit einem anderem String erstetzen.
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/language.types.string.php
 * https://www.php.net/manual/en/function.str-replace.php
 */

$string = 'Hallo World!';

// Funktionsaufruf von 'str_replace'
// mit dem String 'World' als erstes Argument für den Parameter '$search' (String der ersetzt werden soll)
// mit dem String 'Welt' als zweites Argument für den Parameter '$replace' (String der eingefügt werden soll)
// mit der Variable '$string' als drittes Argument für den Parameter '$subject' (String innerhalb dessen gesucht und ersetzt werden soll)
// Der Rückgabewert von 'str_replace' ist ein String und wird in der Variablen '$string_replaced' gespeichert.
$string_replaced = str_replace( 'World', 'Welt', $string );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$string_replaced', welche als Argument mitgegeben wird
var_dump( $string_replaced );