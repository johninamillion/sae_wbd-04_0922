<?php

/*
 * Konstanten in PHP
 *
 * php.net Referenz:
 * https://www.php.net/manual/en/language.constants.php
 * https://www.php.net/manual/en/language.constants.magic.php
 * https://www.php.net/manual/en/reserved.constants.php
 *
 * Eigenschaften von Konstanten:
 * - Konstanten können alle Datentypen beinhalten außer Objekte.
 * - Konstanten können nicht überschreiben werden.
 * - Konstantennamen sollten großgeschrieben werden.
 * - Konstantennamen dürfen nicht mit einer Zahl beginnen.
 * - Konstantennamen dürfen keine sonderzeichen beinhalten außer '_'.
 *
 * Information zu Konstanten:
 * - Es gibt magische Konstanten (bspw. '__DIR__', '__FILE__', '__LINE__', ...), welche durch die typische Schreibweise erkennbar sind.
 * - Es gibt viele vom System vordefinierten Konstanten (bspw. 'E_ALL', 'DIRECTORY_SEPERATOR', 'PHP_INT_MAX', ...), welche wir Nutzern sollten
 */

// Funktionsaufruf von 'define'
// mit der Übergabe vom String 'MY_CONSTANT' als Argument für den ersten Parameter '$constant_name'
// und einem String 'hello' als Argument für den zweiten Parameter '$value'.
define( 'MY_CONSTANT_HELLO', 'hello' );

// Ausgabe der Konstante mit Hilfe von 'echo'
echo MY_CONSTANT_HELLO;     // Gibt den String 'hello' aus

// Ausgabe von möglichen vordefinierten Konstanten
echo E_ALL;                 // Gibt den Integer '32767' aus, welcher als Erkennungsmerkmal dient
echo DIRECTORY_SEPARATOR;   // Gibt das Trennungszeichen von Ordnern im Dateipfad aus (bspw. '/')
echo PHP_INT_MAX;           // Gibt den Integer, welcher den maximalen Wert eines Integers in PHP entspricht, aus (bspw. '9223372036854775807')

// Ausgabe von möglichen Magischen Konstanten
echo __DIR__;               // Gibt den aktuellen Ordnerpfad zur PHP-Datei aus
echo __FILE__;              // Gibt den aktuellen Dateipfad zur PHP-Datei aus
echo __LINE__;              // Gibt die aktuelle Zeile in der PHP-Datei aus
