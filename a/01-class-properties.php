<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

class Car {

    // public erlaubt einen Zugang außerhalb der Klasse
    public bool $var1 = TRUE;

    // private verbietet einen Zugang außerhalb der Klasse
    private bool $var3 = FALSE;

}

$car1 = new Car();
$car2 = new Car();

// Definieren einer Property außerhalb der Klasse, am Objekt (nicht die Klasse kriegt die Property, sondern das Objekt)
// WIR WOLLEN KEINE PROPERTIES AUSSERHALB DER KLASSE FESTLEGEN
$car1->var2 = TRUE;
$car2->var4 = FALSE;

$car2->var1 = FALSE;

// Ausgabe der beiden Objekte zum erkennen der Unterschiedlichen Werte der 'Properties'/'Klassenvariablen'
echo "<pre>";
var_dump( $car1 );
var_dump( $car2 );
echo "</pre>";
