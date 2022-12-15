<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

$basket = [];

function fruit_doesnt_exists_in_basket( array $basket, string $fruit ) : bool {
    
    return in_array( $fruit, $basket ) === FALSE;
}

function add_fruits( array &$basket, string ...$fruits ) : int {
    $counter = 0;

    foreach( $fruits as $fruit ) {
        if ( fruit_doesnt_exists_in_basket( $basket, $fruit ) ) {
            $basket[] = $fruit;
            $counter++;
        }
    }

    return $counter;
}

function get_fruit_by_index( array $basket, int $index ) : ?string {
    foreach ( $basket as $i => $fruit ) {
        if ( $i === $index ) {

            return $fruit;
        }
    }

    return NULL;
}

$a = add_fruits( $basket, 'Apfel', 'Banane', 'Erdbeere' );
$b = add_fruits( $basket, 'Apfel', 'Kiwi' );

$pick = get_fruit_by_index( $basket, 1 );

if ( is_null( $pick ) ) {
    echo "Deine Frucht existiert nicht!";
}
else {
    echo "Deine Frucht ist {$pick}!";
}