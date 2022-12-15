<?php

function form_submitted() : bool {

    return $_SERVER[ 'REQUEST_METHOD' ] === 'POST';
}

function print_input_errors( array $errors, string $input_name ) : void {
    if ( isset( $errors[ $input_name ] ) ) {
        echo '<ul style="color: ">';
        foreach( $errors[ $input_name ] as $error_msg ) {
            echo "<li>{$error_msg}</li>";
        }
        echo '</ul>';
    }
}

function register( array &$errors ) : bool {
    /** @var string|NULL $username */
    $username = filter_input( INPUT_POST, 'username' );
    /** @var string|NULL $email */
    $email = filter_input( INPUT_POST, 'email' );
    /** @var string|NULL $password */
    $password = filter_input( INPUT_POST, 'password' );
    /** @var string|NULL $password_repeat */
    $password_repeat = filter_input( INPUT_POST, 'password_repeat' );
    /** @var string|NULL $gender */
    $gender = filter_input( INPUT_POST, 'gender' );
    /** @var string|NULL $country */
    $country = filter_input( INPUT_POST, 'country' );
    /** @var string|NULL $tos */
    $tos = filter_input( INPUT_POST, 'tos' );

    /** @var bool $validate_username */
    $validate_username = validate_username( $errors, $username );
    /** @var bool $validate_gender */
    $validate_gender = validate_gender( $errors, $gender );
    /** @var bool $validate_country */
    $validate_country = validate_country( $errors, $country );
    /** @var bool $validate_email */
    $validate_email = validate_email( $errors, $email );
    /** @var bool $validate_password */
    $validate_password = validate_password( $errors, $password, $password_repeat );
    /** @var bool $validate_tos */
    $validate_tos = validate_tos( $errors, $tos );

    if (
            $validate_username
        &&  $validate_gender
        &&  $validate_country
        &&  $validate_email
        &&  $validate_password
        &&  $validate_tos
    ) {
        echo "SUCCESS!";

        return TRUE;
    }
    echo "FAIL!";

    return FALSE;
}

function validate_password( array &$errors, ?string $password, ?string $password_repeat ) : bool {
    // Überprüfen ob das Passwort NULL oder Leer ist
    if ( is_null( $password ) || empty( $password ) ) {
        $errors[ 'password' ][] = _( 'The Password should not be empty' );
    }
    // Überprüfen ob das Passwort größer oder gleich 8 Zeichen lang ist
    if ( strlen( $password ) <= 8 ) {
        $errors[ 'password' ][] = _( 'The password should be minimum 8 characters long' );
    }
    // Überprüfen ob das Passwort kleiner oder gleich 64 Zeichen lang ist
    if ( strlen( $password ) >= 64 ) {
        $errors[ 'password' ][] = _( 'The password should be maximal 64 characters long' );
    }
    // Überprüfen ob das Passwort kleinbuchstaben enthält
    if ( preg_match( '/[a-z]/', $password ) === 0 ) {
        $errors[ 'password' ][] = _( 'The password should contain minimum one lowercase character' );
    }
    // Überprüfen ob das Passwort großbuchstaben enthält
    if ( preg_match( '/[A-Z]/', $password ) === 0 ) {
        $errors[ 'password' ][] = _( 'The password should contain minimum one uppercase character' );
    }
    // Überprüfen ob das Passwort zahlen enthält
    if ( preg_match( '/\d/', $password ) === 0 ) {
        $errors[ 'password' ][] = _( 'The password should contain minimum one digit' );
    }
    // Überprüfen ob das Passwort Sonderzeichen enthält
    if ( preg_match( '/\W/', $password ) === 0 ) {
        $errors[ 'password' ][] = _( 'The password should contain minmum one special character' );
    }
    // Überprüfen ob das Passwort whitespace enthält
    if ( preg_match( '/\s/', $password ) === 1 ) {
        $errors[ 'password' ][] = _( 'The password should not contain any whitespace' );
    }
    // Überprüfen ob die Wiederholung vom Passwort mit dem Passwort übereinstimmt
    if ( $password !== $password_repeat ) {
        $errors[ 'password_repeat' ][] = _( 'The password doesn\'t match' );
    }

    return isset( $errors[ 'password' ] ) === FALSE || count( $errors[ 'password' ] ) === 0;
}

function validate_email( array &$errors, ?string $email ) : bool {
    // Überprüfen ob die E-Mail Adresse NULL oder Leer ist
    if ( is_null( $email ) || empty( $email ) ) {
        $errors[ 'email' ][] = _( 'The E-Mail Address should not be empty' );
    }
    // Überprüfen ob die E-Mail Adresse valide ist mit hilfe von filter_var und FILTER_VALIDATE_EMAIL
    if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === FALSE ) {
        $errors[ 'email' ][] = _( 'The E-Mail Address is invalid' );
    }

    return isset( $errors[ 'email' ] ) === FALSE || count( $errors[ 'email' ] ) === 0;
}

function validate_country( array &$errors, ?string $country ) : bool {
    // Überprüfen ob das Land NULL oder Leer ist
    if ( is_null( $country ) || empty( $country ) ) {
        $errors[ 'country' ][] = _( 'The country should not be empty' );
    }
    // Überprüfen ob das Land einen validen Wert hat
    if ( in_array( $country, [ 'germany', 'austria', 'swiss' ] ) === FALSE ) {
        $errors[ 'country' ][] = _( 'The country is invalid' );
    }

    return isset( $errors[ 'country' ] ) === FALSE || count( $errors[ 'country' ] ) === 0;
}

function validate_gender( array &$errors, ?string $gender ) : bool {
    // Überprüfen ob das Geschlecht NULL oder Leer ist
    if ( is_null( $gender ) || empty( $gender ) ) {
        $errors[ 'gender' ][] = _( 'The gender should not be empty' );
    }
    // Überprüfen ob das Geschlecht einen validen Wert hat
    if ( in_array( $gender, [ 'female', 'male' ] ) === FALSE ) {
        $errors[ 'gender' ][] = _( 'The gender is invalid' );
    }

    return isset( $errors[ 'gender' ] ) === FALSE || count( $errors[ 'gender' ] ) === 0;
}

function validate_username( array &$errors, ?string $username ) : bool {
    // Überprüfen ob der Nutzername NULL oder leer ist
    if ( is_null( $username ) || empty( $username ) ) {
        $errors[ 'username' ][] = _( 'The username should not be empty' );
    }
    // Überprüfen ob der Nutzername kleiner als 4 ist
    if ( strlen( $username ) < 4 ) {
        $errors[ 'username' ][] = _( 'The username should minimum 4 characters long' );
    }
    // Überprüfen ob der Nutzername größer als 16 ist
    if ( strlen( $username ) > 16 ) {
        $errors[ 'username' ][] = _( 'The username should be maximum 16 characters long' );
    }
    // Überprüfen ob der Nutzername whitespace enthält
    if ( preg_match( '/\s/', $username ) === 1 ) {
        $errors[ 'username' ][] = _( 'The username should not contain any whitespace' );
    }

    return isset( $errors[ 'username' ] ) === FALSE || count( $errors[ 'username' ] ) === 0;
}

function validate_tos( array &$errors, ?string $tos ) : bool {
    if ( is_null( $tos ) || $tos !== '1' ) {
        $errors[ 'tos' ][] = _( 'Please accept the Terms of Service' );
    }

    return isset( $errors[ 'tos' ] ) === FALSE || count( $errors[ 'tos' ] ) === 0;
}