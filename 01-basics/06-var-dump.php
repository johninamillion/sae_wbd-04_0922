<?php

/*
 * var_dump - Ausgabe von einem Wert mit all seinen Informationen
 *
 * php.net Referenz:
 * https://www.php.net/manual/de/function.var-dump.php
 *
 * Geeignet für Werte vom Typ 'String', 'Integer', und 'Floats', 'Array', 'Boolean' und 'Object'.
 *
 * Typ          Ausgabe                                 Typenbeschreibung
 * ---------------------------------------------------------------------------------------------------------------------
 * String       Gibt Wert vom String aus                Zeichenkette
 * Integer      Gibt Wert vom Integer aus               Ganzzahl
 * Float        Gibt Wert vom Float aus                 Gleitkommazahl
 * Array        Gibt Wert vom Array und                 Ein Datentyp der mehrfache Werte von verschiedenen Datentype halten kann
 *              in Klammern die Anzahl der Werte
 *              sowie eine Auflistung dieser Werte
 *              mit Index/Key und dem jeweiligen Wert
 *              und Typ dieses Wertes aus
 * Boolean      Gibt Wert vom Boolean aus               Ein Datentyp mit zwei Zuständen der logischen Wahrheitswerte TRUE (wahr) und FALSE (falsch).
 * Object       Gibt den Klassennamen des Objektes      Eine Instanz einer Klasse (Objektorientierte Entwicklung)
 *              und die Objektvariablen mit Geltungs-
 *              bereich aus
 */

// Funktionsaufruf von 'var_dump'
// mit dem String 'Hello World' als Argument für den ersten Parameter '$value'
var_dump('Hello World');
// mit dem Integer '1' als Argument für den ersten Parameter '$value'
var_dump(1);
// mit dem Float '2.3' als Argument für den ersten Parameter '$value'
var_dump(2.3);
// mit einem Array als Argument für den ersten Parameter '$value'
var_dump( [ 'a', 1 . 2.3 ] );
// mit einem Boolean als Argument für den ersten Parameter '$value'
var_dump( TRUE );
// mit einem Objekt als Argument für den ersten Parameter '$value'
var_dump( new Exception() );
