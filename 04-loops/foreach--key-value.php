<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

$users = [
    [
        'user_id' => 1,
        'username' => 'john',
        'email' => 'j.frischmuth@sae.edu',
        'gender' => 'male',
    ],
    [ 'user_id' => 2, 'username' => 'marc', 'email' => 'j.frischmuth@sae.edu', 'gender' => 'male' ],
    [ 'user_id' => 3, 'username' => 'alex', 'email' => 'j.frischmuth@sae.edu', 'gender' => 'male' ],
    [ 'user_id' => 4, 'username' => 'stella', 'email' => 'j.frischmuth@sae.edu', 'gender' => 'female' ],
    [ 'user_id' => 4, 'username' => 'leon', 'email' => 'j.frischmuth@sae.edu', 'gender' => 'male' ],
];

$genders = [];

//for ( $i = 0; $i > count( $users ); $i++ ) {
//    $user = $users[ $i ];
//
//}

foreach( $users as $user ) {
    $gender = $user[ 'gender' ]; // Wert vom User Array mit dem Key 'gender' unter der variable gender speichern

    // Überprüfen ob das Geschlecht bereits in der "Statistik" auftaucht (in unserem Array als Key vorhanden ist)
    if ( isset( $genders[ $gender ] ) === FALSE ) {
        $genders[ $gender ] = 1;
    }
    // Wenn das Geschlecht als Key vorhanden, erhöhen wir den Wert um 1
    else {
        $genders[ $gender ]++;
    }
}

echo "<pre>";
var_dump( $genders );
echo "</pre>";