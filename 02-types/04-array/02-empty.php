<?php

/*
 * Überprüfen ob ein Array leer ist
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.php.net/manual/en/function.empty.php
 */

// Funktionsaufruf von 'empty'
// Mit einem befültten Array als Argument
// Der Rückgabewerte von 'empty' entspricht bei einem befüllten Array als Argument einen Boolean mit dem Wert 'FALSE'
// Der Rückgabewerte von 'empty' wird in der Variable '$empty_false' gespeichert.
$empty_false = empty( [ 'Hallo', 'Welt' ] );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$empty_false', welche als Argument mitgegeben wird
var_dump( $empty_false );

// Funktionsaufruf von 'empty'
// Mit einem unbefültten Array als Argument
// Der Rückgabewerte von 'empty' entspricht bei einem unbefüllten Array als Argument einen Boolean mit dem Wert 'TRUE'
// Der Rückgabewerte von 'empty' wird in der Variable '$empty_true' gespeichert.
$empty_true = empty( [] );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$empty_true', welche als Argument mitgegeben wird
var_dump( $empty_true );
