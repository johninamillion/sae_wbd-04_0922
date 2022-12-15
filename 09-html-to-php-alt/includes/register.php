<?php

function register( array &$errors ) : bool {
    // Wir definieren eine Variable '$username' in der wir den Wert von der superglobalen '$_POST' mit dem Key 'username' ( $_POST[ 'username' ] ) speichern

    // Alternative Schreibweise:
    //$username = $_POST[ 'username' ] ?? NULL;

    // Bevorzugte Schreibweise:
    /** @var string|NULL $username */
    $username = filter_input( INPUT_POST, 'username' );
    /** @var string|NULL $email */
    $email = filter_input( INPUT_POST, 'email' );
    /** @var string|NULL $password */
    $password = filter_input( INPUT_POST, 'password' );
    /** @var string|NULL $country */
    $country = filter_input( INPUT_POST, 'country' );
    /** @var string|NULL $gender */
    $gender = filter_input( INPUT_POST, 'gender' );
    /** @var string|NULL $tos */
    $tos = filter_input( INPUT_POST, 'tos' );

    // Wir speichern uns die Zwischenergebnisse der Validierung in Variablen ab
    // Dardurch werden alle Input Felder validiert und alle Fehlermeldung in das $errors array geschrieben
    /** @var bool $validate_username */
    $validate_username = validate_username( $errors, $username );
    /** @var bool $validate_email */
    $validate_email = validate_email( $errors, $email );
    /** @var bool $validate_password */
    $validate_password = validate_password( $errors, $password );
    /** @var bool $validate_country */
    $validate_country = validate_country( $errors, $country );
    /** @var bool $validate_gender */
    $validate_gender = validate_gender( $errors, $gender );
    /** @var bool $validate_tos */
    $validate_tos = validate_tos( $errors, $tos );

    // Wir überprüfen ob alle Werte der Validierung TRUE ergeben, um eine Registrierung zu gewährleisten
    // Sollte einer der Werte FALSE ergeben
    if (
            $validate_username // === TRUE
        &&  $validate_email // === TRUE
        &&  $validate_password // === TRUE
        &&  $validate_country
        &&  $validate_gender
        &&  $validate_tos
    ) {
        // DAS SPEICHERN VON DEN NUTZERDATEN IN DER TEXTDATEI WIRD DURCH EINE DATENBANKVERBINDUNG ERSETZT
        /** @var array $user_data */
        $user_data = [
            'username'  => $username,
            'email'     => $email,
            'password'  => md5( $password ), // passwort wird mit Hilfe von md5 verschlüsselt
            'gender'    => $gender,
            'country'   => $country,
        ];

        $user = [];

        foreach( $user_data as $key => $value ) {
            $user[] = "{$key}:{$value}";
        }

        $new_user = implode( '|', $user );

        file_put_contents( DATA_USERS, "{$new_user}\n", FILE_APPEND );

        return TRUE;
    }

    return FALSE;
}

function validate_country( array &$errors, ?string $country ) : bool {
    // Überprüfen ob der Nutzer eine Auswahl vom Land getätigt hat
    if ( is_null( $country ) || empty( $country ) ) {
        $errors[ 'country' ][] = 'Please choose a valid country';
    }
    // Überprüfen ob der Wert von Country in einem Array mit allen validen Werten vorhanden ist
    if ( in_array( $country, [ 'austria', 'germany', 'luxembourg', 'swiss' ] ) === FALSE ) {
        $errors[ 'country' ][] = 'Please choose a valid country from List';
    }

    // Wir überprüfen ob der Key 'country' im $errors Array gesetzt wurde
    // Wurde dieser gesetzt gibt es einen Fehler bei der Länderauswahl
    // Ist dieser key nicht gesetzt ist die Länderauswahl valide und unsere Funktion gibt 'TRUE' zurück
    return isset( $errors[ 'country' ] ) === FALSE;
}

function validate_email( array &$errors, ?string $email ) : bool {
    // Überprüfen ob der Nutzer eine Eingabe von der E-Mail Addresse getätigt hat
    if ( is_null( $email ) || empty( $email ) ) {
        $errors[ 'email' ][] = 'Please type in a valid E-Mail address';
    }
    // Überprüfen ob der E-Mail Addresse bereits besteht
    if ( email_exists( $email ) ) {
        $errors[ 'email' ][] = 'The email already exists';
    }
    // Über filter_var mit dem Filter 'FILTER_VALIDATE_EMAIL' überprüfen ob die E-Mail Adresse valide ist
    if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === FALSE ) {
        $errors[ 'email' ][] = 'The e-mail address should be valid';
    }

    // Wir überprüfen ob der Key 'email' im $errors Array gesetzt wurde
    // Wurde dieser gesetzt gibt es einen Fehler in der E-Mail Addresse
    // Ist dieser key nicht gesetzt ist die E-Mail Adresse valide und unsere Funktion gibt 'TRUE' zurück
    return isset( $errors[ 'email' ] ) === FALSE;
}

function validate_gender( array &$errors, ?string $gender ) : bool {
    // Überprüfen ob der Nutzer eine Auswahl vom Geschlecht getätigt hat
    if ( is_null( $gender ) || empty( $gender ) ) {
        $errors[ 'gender' ][] = 'Please choose a valid gender';
    }
    // Überprüfen ob der Wert von gender in einem Array mit allen validen Werten vorhanden ist
    if ( in_array( $gender, [ 'female', 'male' ] ) === FALSE ) {
        $errors[ 'gender' ][] = 'Please choose a valid gender from List';
    }

    // Wir überprüfen ob der Key 'gender' im $errors Array gesetzt wurde
    // Wurde dieser gesetzt gibt es einen Fehler bei der Geschlechtsauswahl
    // Ist dieser key nicht gesetzt ist die Geschlechtsauswahl valide und unsere Funktion gibt 'TRUE' zurück
    return isset( $errors[ 'gender' ] ) === FALSE;
}

function validate_username( array &$errors, ?string $username ) : bool {
    // Überprüfen ob der Nutzer eine Eingabe vom Nutzernamen getätigt hat
    if ( is_null( $username ) || empty( $username ) ) {
        $errors[ 'username' ][] = 'Please type in a valid username';
    }
    // Überprüfen ob der Nutzername bereits besteht
    if ( username_exists( $username ) ) {
        $errors[ 'username' ][] = 'The username already exists';
    }
    // Über strlen überprüfen ob die Länge vom Nutzernamen kleiner als 4 Zeichen lang ist
    if ( strlen( $username ) < 4 ) {
        $errors[ 'username' ][] = 'The username should be minimum 4 characters long';
    }
    // Über strlen überprüfen ob die Länge vom Nutzernamen größer als 16 Zeichen lang ist
    if ( strlen( $username ) > 16 ) {
        $errors[ 'username' ][] = 'The username should be maxmimum 16 characters long';
    }
    // Über preg_match mit den regulären Ausdruck '/\s/' überprüfen ob der Nutzername whitespace enthält
    if ( preg_match( '/\s/', $username ) === 1 ) {
        $errors[ 'username' ][] = 'The username should not contain any whitespace';
    }

    // Wir überprüfen ob der Key 'username' im $errors Array gesetzt wurde
    // Wurde dieser gesetzt gibt es einen Fehler im Nutzernamen
    // Ist dieser key nicht gesetzt ist der Nutzername valide und unsere Funktion gibt 'TRUE' zurück
    return isset( $errors[ 'username' ] ) === FALSE;
}

function validate_password( array &$errors, ?string $password ) : bool {
    // Überprüfen ob der Nutzer eine Eingabe vom Passwort getätigt hat
    if ( is_null( $password ) || empty( $password ) ) {
        $errors[ 'password' ][] = 'Please type in a valid password';
    }
    // Über strlen überprüfen ob die Länge vom Passwort kleiner als 8 Zeichen lang ist.
    if ( strlen( $password ) < 8 ) {
        $errors[ 'password' ][] = 'The password should be minimum 8 characters long';
    }
    // Über preg_match mit den regulären Ausdruck '/[a-z]/' überprüfen ob das Passwort kleinbuchstaben enthält
    if ( preg_match( '/[a-z]/', $password ) === 0 ) {
        $errors[ 'password' ][] = 'The password should contain lowercase characters';
    }
    // Über preg_match mit den regulären Ausdruck '/[A-Z]/' überprüfen ob das Passwort Großbuchstaben enthält
    if ( preg_match( '/[A-Z]/', $password ) === 0 ) {
        $errors[ 'password' ][] = 'The password should contain uppercase characters';
    }
    // Über preg_match mit den ruglären Ausdruck '/\d/' überprüfen ob das Passwort Zahlen enthält
    if ( preg_match( '/\d/', $password ) === 0 ) {
        $errors[ 'password' ][] = 'The password should contain digits';
    }
    // Über preg_match mit den ruglären Ausdruck '/\W/' überprüfen ob das Passwort Sonderzeichen enthält
    if ( preg_match( '/\W/', $password ) === 0 ) {
        $errors[ 'password' ][] = 'The password should contain special characters';
    }
    // Über preg_match mit den regülären Ausdruck '/\s/' überprüfen ob das Passwort Leerzeichen enthält
    if ( preg_match( '/\s/', $password ) === 1 ) {
        $errors[ 'password' ][] = 'The password should not contain any whitespace';
    }

    // Wir überprüfen ob der Key 'password' im $errors Array gesetzt wurde
    // Wurde dieser gesetzt gibt es einen Fehler im Passwort
    // Ist dieser key nicht gesetzt ist das Passwort valide und unsere Funktion gibt 'TRUE' zurück
    return isset( $errors[ 'password' ] ) === FALSE;
}

function validate_tos( array &$errors, ?string $tos ) : bool {
    // Überprüfen ob der Nutzer die Checkbox ausgewählt hat und der Wert von $tos dem Value der Checkbox entspricht
    if ( is_null( $tos ) || $tos !== '1' ) {
        $errors[ 'tos' ][] = 'Please accept the Terms of Service';
    }

    // Wir überprüfen ob der Key 'tos' im $errors Array gesetzt wurde
    // Wurde dieser gesetzt gibt es einen Fehler in der Checkbox
    // Ist dieser key nicht gesetzt ist die Checkbox valide und unsere Funktion gibt 'TRUE' zurück
    return isset( $errors[ 'tos' ] ) === FALSE;
}