<?php

function is_loggedin() : bool {

    return isset( $_SESSION[ 'login' ] );
}

function login( array &$errors ) : bool {
    /** @var string|NULL $username */
    $username = filter_input( INPUT_POST, 'username' );
    /** @var string|NULL $password */
    $password = filter_input( INPUT_POST, 'password' );

    /** @var array|NULL $user */
    $user = get_user( $username );

    // Wenn die Variable $user einen Array zurück gibt, gibt es einen Nutzer für den Nutzernamen
    // Wenn die Funktion NULL zurück gibt, gibt es keinen Nutzer für den Nutzernamen
    if ( is_null( $user ) === FALSE ) {
        if ( $user[ 'password' ] === md5( $password ) ) {
            // Logindaten in die Session schreiben
            $_SESSION[ 'login' ] = [
                'username' => $username,
                'timestamp' => time()
            ];

            return TRUE;
        }
    }

    $errors[ 'login' ][] = 'The username and password combination doesn\'t exist.';

    return FALSE;
}

function logout() : void {
    unset( $_SESSION[ 'login' ] );
}