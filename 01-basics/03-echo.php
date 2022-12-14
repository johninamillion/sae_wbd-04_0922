<?php

/*
 * echo - Ausgabe von Werten in PHP
 *
 * php.net Referenz:
 * https://www.php.net/manual/de/function.echo.php
 *
 * Geeignet für Werte vom Typ 'String', 'Integer', und 'Floats'.
 * Ungeeignet für Werte vom Typ 'Boolean', 'Array', 'Object' und 'NULL'.
 *
 * Typ          Ausgabe                             Typenbeschreibung
 * ---------------------------------------------------------------------------------------------------------------------
 * String       Gibt Wert vom String aus            Zeichenkette
 * Integer      Gibt Wert vom Integer aus           Ganzzahl
 * Float        Gibt Wert vom Float aus             Gleitkommazahl
 * Array        Gibt die Zeichenkette 'Array' aus   Ein Datentyp der mehrfache Werte von verschiedenen Datentype halten kann
 * Boolean      Gibt bei dem Wert TRUE '1' aus      Ein Datentyp mit zwei Zuständen der logischen Wahrheitswerte TRUE (wahr) und FALSE (falsch).
 *              Gibt bei dem Wert FALSE nichts aus
 * Object       Gibt den Klassennamen aus           Eine Instanz einer Klasse (Objektorientierte Entwicklung)
 */

// Aufruf von echo
// echo ist ein reservierter Begriff in PHP.
// mit dem String 'Hello World' als Ausgabe
echo 'Hello World';
// mit dem Integer '1' als Ausgabe
echo 1;
// mit dem Float '2.3' als Ausgabe
echo 2.3;

// Alternative schreibweise als Funktionsaufruf von 'echo'
// mit dem String 'Hello World' als Argument
echo( 'Hello World' );
// mit dem Integer '1' als Argument
echo( 1 );
// mit dem Float '2.3' als Argument
echo( 2.3 );

// Alternative schreibweise als mehrfacher Funktionsaufruf von 'echo'
echo( 'Hello World' ), ( 1 ), ( 2.3 );
