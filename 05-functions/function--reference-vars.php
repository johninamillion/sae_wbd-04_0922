<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

$korb = [];

// type hints : php 7.0 >
// return types : php 7.1 >
// string $fruit - legt fest das eine Frucht vom Typen string der Funktion übergeben werden kann
// : void - legt void als return Type fest - void bedeutet das wir keinen Wert zurückgeben
function add_fruits( array &$korb, string ...$fruits ) : void {
    foreach( $fruits as $fruit ) {
        $korb[] = $fruit;
    }
}

add_fruits( $korb, 'Apfel', 'Banane', 'Kiwi' );

var_dump( $korb );


