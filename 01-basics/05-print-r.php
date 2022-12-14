<?php

/*
 * print_r - Ausgabe von einem Wert in einer lesbaren Form
 *
 * php.net Referenz:
 * https://www.php.net/manual/de/function.print-r.php
 *
 * Geeignet für Werte vom Typ 'String', 'Integer', und 'Floats', 'Array' und 'Object'.
 * Ungeeignet für Werte vom Typ 'Boolean'.
 *
 * Typ          Ausgabe                                 Typenbeschreibung
 * ---------------------------------------------------------------------------------------------------------------------
 * String       Gibt Wert vom String aus                Zeichenkette
 * Integer      Gibt Wert vom Integer aus               Ganzzahl
 * Float        Gibt Wert vom Float aus                 Gleitkommazahl
 * Array        Gibt Wert vom Array mit Index/Key aus   Ein Datentyp der mehrfache Werte von verschiedenen Datentype halten kann
 * Boolean      Gibt bei dem Wert TRUE '1' aus          Ein Datentyp mit zwei Zuständen der logischen Wahrheitswerte TRUE (wahr) und FALSE (falsch).
 *              Gibt bei dem Wert FALSE nichts aus
 * Object       Gibt den Klassennamen des Objektes      Eine Instanz einer Klasse (Objektorientierte Entwicklung)
 *              und die Objektvariablen mit Geltungs-
 *              bereich aus
 */

// Funktionsaufruf von 'print_r'
// mit dem String 'Hello World' als Argument für den ersten Parameter '$value'
print_r('Hello World');
// mit dem Integer '1' als Argument für den ersten Parameter '$value'
print_r(1);
// mit dem Float '2.3' als Argument für den ersten Parameter '$value'
print_r(2.3);
// mit einem Array als Argument für den ersten Parameter '$value'
print_r( [ 'a', 1 . 2.3 ] );
// mit einem Objekt als Argument für den ersten Parameter '$value'
print_r( new Exception() );
