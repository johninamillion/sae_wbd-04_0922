<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

$fruits = [];

// type hints : php 7.0 >
// return types : php 7.1 >
// string $fruit - legt fest das eine Frucht vom Typen string der Funktion übergeben werden kann
// : void - legt void als return Type fest - void bedeutet das wir keinen Wert zurückgeben
function add_fruits( array &$fruits, string $fruit ) : void {
    $fruits[] = $fruit;
}

add_fruits( $fruits, 'Apfel' );
add_fruits( $fruits, 'Banane' );
add_fruits( $fruits, 'Kiwi' );

var_dump( $fruits );