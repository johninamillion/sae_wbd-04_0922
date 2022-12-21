<?php

final class Example {

    public static int $x = 0;

    public static int $y = 1;

    public int $z = 0;

    public function combine_x_y() : void {

        $this->z = self::$x + self::$y;
    }

}

// Der wert von X und Y ändert sich für jede INstanz der Klasse Example
Example::$x = 10;
Example::$y = 20;

$example = new Example();
// Rechnen mit den Properties X (10) und Y (20), der KLASSE Example
// Das Ergebnis der Berechnung wird in die Property $z der Instanz geschriben, und gilt nur für das OBJEKT (die Instanz)
$example->combine_x_y();

// Der wert von X und Y ändert sich für jede INstanz der Klasse Example
Example::$x = 100;
Example::$y = 200;

$example2 = new Example();
// Rechnen mit den Properties X (100) und Y (200), der KLASSE Example
// Das Ergebnis der Berechnung wird in die Property $z der Instanz geschriben, und gilt nur für das OBJEKT (die Instanz)
$example2->combine_x_y();

echo "<pre>";
var_dump( $example);
echo "</pre>";
echo "<pre>";
var_dump( $example2 );
echo "</pre>";