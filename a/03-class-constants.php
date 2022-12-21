<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

class Car {

    const CONST_1 = TRUE;

    public bool $var_1 = TRUE;

}

class BMW extends Car {

    const CONST_1 = FALSE;

}

$car1 = new Car();
$car2 = new BMW();

$car1->var_1 = FALSE;

// Ausgabe der beiden Objekte zum erkennen der Unterschiedlichen Werte der 'Properties'/'Klassenvariablen'
echo "<pre>";
// Statischer Aufruf der Konstanten CONST_1
//var_dump( $car1::CONST_1 );
var_dump( Car::CONST_1 );
// Objektorientierte Aufruf der Variable 1
//var_dump( $car1->var_1 );
//var_dump( $car2::CONST_1 );
var_dump( BMW::CONST_1 );
echo "</pre>";
