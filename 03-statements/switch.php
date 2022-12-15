<?php

$name = 'Arifo';

switch( $name ) {
    case 'Stella':
    case 'Alex':
        $age = 28;
        break;
    case 'John':
        $age = 31;
        break;
    case 'Marc':
        $age = 32;
        break;
    default:
        $age = NULL;
        break;
}

if ( is_null( $age ) === TRUE ) {
    echo "Das Alter von {$name} ist unbekannt.";
}
else {
    echo "{$name} ist {$age} Jahre alt.";
}

//if ( $age !== NULL ) {
//    echo "{$name} ist {$age} Jahre alt.";
//}
//else {
//    echo "Das Alter von {$name} ist unbekannt.";
//}
