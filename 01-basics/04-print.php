<?php

/*
 * print - Ausgabe von Werten in PHP mit Rückgabewert 1
 *
 * php.net Referenz:
 * https://www.php.net/manual/de/function.print.php
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

// Aufruf von print
// print ist ein reservierter Begriff in PHP.
// mit dem String 'Hello World' als Ausgabe
print 'Hello World';
// mit dem Integer '1' als Ausgabe
print 1;
// mit dem Float '2.3' als Ausgabe
print 2.3;

// Alternative schreibweise als Funktionsaufruf von 'print'
// mit dem String 'Hello World' als Argument
print('Hello World');
// mit dem Integer '1' als Argument
print(1);
// mit dem Float '2.3' als Argument
print(2.3);
