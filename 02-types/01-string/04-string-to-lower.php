<?php

/*
 * String in eine Zeichenkette aus kleinbuchstaben umwandeln.
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/language.types.string.php
 * https://www.php.net/manual/en/function.strtolower.php
 */

$lorem_ipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

// Funktionsaufruf von 'strtolower' mit der Variable '$lorem_ipsum' als Argument
// Der Rückgabewert von 'strtolower' wird in der Variable '$lower_case_text' gespeichert
$lower_case_text = strtolower( $lorem_ipsum );

// Funktionsaufruf von 'var_dump' zur Ausgabe von Typ und Wert der Variable '$lower_case_text', welche als Argument mitgegeben wird
var_dump( $lower_case_text );