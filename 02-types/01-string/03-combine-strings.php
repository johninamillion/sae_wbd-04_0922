<?php

/*
 * Kombinieren von Strings in PHP.
 *
 * php.net Referenz:
 * https://www.php.net/manual/en/language.types.string.php
 * https://www.php.net/manual/en/language.operators.string.php
 */

$var1 = 'Hello';
$var2 = 'World';

// Schreibweise zur Ausgabe einer kombinierten Zeichen in einfachen Anführungszeichen ohne Zugriff auf Variablen
// Einfache Anführungszeichen erlauben uns kein Zugriff auf Variablen.
// Eine Zeichenkette in einfachen Anführungszeichen können mit Hilfe von dem Zeichen '.' kombinieren (equivalent zu '+' in JavaScript)
echo $var1 . ' ' . $var2 . '!';

// Alternative schreibweise zur Ausgabe einer kombinierten Zeichenkette in doppelten Anführungszeichen mit Zugriff auf Variablen
// Doppelte Anführungszeichen erlauben uns Zugriff auf Variablen und maskierte Zeichen (bspw. '\n', '\r', \'t', ...).
// Diese schreiben wir Geschweiften Klammern ('{' & '}') um direkt hinter der Variable mit unserer Zeichenkette fortführen zu können, ohne den Variablennamen zu verändern.
echo "{$var1} {$var2}!";