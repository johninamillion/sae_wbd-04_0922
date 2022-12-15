<?php


$array = [
    'Apfel' => 'rot',
    'Ananas' => 'gelb',
    'Avocado' => 'grün',
    'Banane' => 'gelb',
    'Birne' => 'grün',
    'Erdbeere' => 'rot',
    'Kiwi' => 'grün'
];

$colors = [];

// foreach $array as $value
// erlaubt uns zugriff auf den Wert
foreach( $array as $value ) {

    // Überprüfen ob die value (Farbe) noch nicht als key im $colors array gesetzt ist
    if ( isset( $colors[ $value ] ) === FALSE ) {
        $colors[ $value ] = 1;
    }
    else {
        $count = $colors[ $value ];
        $colors[ $value ] = $count + 1;
    }
}

// foraech $array as $key => $value
// erlaubt uns zugriff auf den Key und den Wert
foreach( $colors as $key => $value ) {
    echo "{$value} Früchte haben die Farbe {$key} <br>";
}