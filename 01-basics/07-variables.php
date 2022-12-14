<?php

/*
 * Variablen in PHP
 *
 * php.net Referenz:
 * https://www.php.net/manual/en/language.variables.basics.php
 * https://www.php.net/manual/en/language.variables.predefined.php
 *
 * Eigenschaften von Variablen:
 * - Variablen können alle Datentypen beinhalten.
 * - Variablen lassen sich überschreiben, der Wert einer Variable ist somit nicht konstant.
 * - Variablen beginnen mit einem '$'.
 * - Variablennamen dürfen nicht mit einer Zahl beginnen.
 * - Variablennamen dürfen keine sonderzeichen beinhalten außer '_'.
 *
 * Information zu Variablen:
 * - Es gibt sogennanten superglobalen die durch den System bereit gestellt werden
 */

// Definieren der Variable '$var1' mit dem String 'Hello' als Wert.
$var1 = 'Hello';
// Definieren der Variable '$var2' mit dem String 'World' als Wert.
$var2 = 'World';

// Schreibweise zur Ausgabe einer kombinierten Zeichen in einfachen Anführungszeichen ohne Zugriff auf Variablen
// Einfache Anführungszeichen erlauben uns kein Zugriff auf Variablen.
// Eine Zeichenkette in einfachen Anführungszeichen können mit Hilfe von dem Zeichen '.' kombinieren (equivalent zu '+' in JavaScript)
echo $var1 . ' ' . $var2 . '!';

// Alternative schreibweise zur Ausgabe einer kombinierten Zeichenkette in doppelten Anführungszeichen mit Zugriff auf Variablen
// Doppelte Anführungszeichen erlauben uns Zugriff auf Variablen.
// Diese schreiben wir Geschweiften Klammern ('{' & '}') um direkt hinter der Variable mit unserer Zeichenkette fortführen zu können, ohne den Variablennamen zu verändern.
echo "{$var1} {$var2}!";