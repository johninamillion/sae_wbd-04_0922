<?php

define( 'DEBUG', TRUE );

$array = [
    'Apfel' => 'rot',
    'Banane' => 'gelb'
];

$array_num = [
    1, 2, 3
];

function debug( mixed $value ) : void {
    if ( DEBUG === TRUE ) {
        echo "Debug:";
        echo "<pre>";
        var_dump( $value );
        echo "</pre>";
    }
}

debug( $array );
debug( $array_num );

//if ( DEBUG === TRUE ) {
//    echo "Debug:";
//    echo "<pre>";
//    var_dump( $array );
//    echo "</pre>";
//}
//
//if ( DEBUG === TRUE ) {
//    echo "Debug:";
//    echo "<pre>";
//    var_dump( $array_num );
//    echo "</pre>";
//}