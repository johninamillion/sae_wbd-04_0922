<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

$fruits = [];

// type hints : php 7.0 >
// return types : php 7.1 >
// string $fruit - legt fest das eine Frucht vom Typen string der Funktion übergeben werden kann
// : void - legt void als return Type fest - void bedeutet das wir keinen Wert zurückgeben
function add_fruits( array $fruits, string $fruit ) : array {
    $fruits[] = $fruit;

    return $fruits;
}

$fruits = add_fruits( $fruits, 'Apfel' );
$fruits = add_fruits( $fruits, 'Banane' );
$fruits = add_fruits( $fruits, 'Kiwi' );
//add_fruits( [ 'asd' ] ); // es ist nicht erlaubt einen Array als Argument zu nutzen, da der Parameter einen Wert vom Type string erwartet
//add_fruits( TRUE );

var_dump( $fruits );