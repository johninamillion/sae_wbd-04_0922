<?php

class Registration {

    private array $errors = [];

    /**
     * Validate user data and register user if validation is completed
     *
     * @access  public
     * @param   string|null $username   Nutzername der registriert werden
     * @param   string|null $email      E-Mail die registriert werden soll
     * @param   string|null $password   Passwort
     * @return  bool                    Gibt FALSE zurück, wenn die Registrierung gescheiter ist, Gibt TRUE wenn die Registrierung erfolgreich war
     */
    public function register( ?string $username, ?string $email, ?string $password ) : bool {
        /** @var bool $validate_username */
        $validate_username = $this->validate_username( $username );
        $validate_password = $this->validate_password( $password );
        $validate_email = $this->validate_email( $email );

        if (
                $validate_username
            &&  $validate_password
            &&  $validate_email
        ) {

            RETURN TRUE;
        }

        return FALSE;
    }

    private function validate_email( ?string $email ) : bool {
        // Überprüfen ob der Nutzer eine Eingabe von der E-Mail Addresse getätigt hat
        if ( is_null( $email ) || empty( $email ) ) {
            $this->errors[ 'email' ][] = 'Please type in a valid E-Mail address';
        }
        // Über filter_var mit dem Filter 'FILTER_VALIDATE_EMAIL' überprüfen ob die E-Mail Adresse valide ist
        if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === FALSE ) {
            $this->errors[ 'email' ][] = 'The e-mail address should be valid';
        }

        return isset( $this->errors[ 'email' ] ) === FALSE;
    }

    private function validate_password( ?string $password ) : bool {
        // Überprüfen ob der Nutzer eine Eingabe vom Passwort getätigt hat
        if ( is_null( $password ) || empty( $password ) ) {
            $this->errors[ 'password' ][] = 'Please type in a valid password';
        }
        // Über strlen überprüfen ob die Länge vom Passwort kleiner als 8 Zeichen lang ist.
        if ( strlen( $password ) < 8 ) {
            $this->errors[ 'password' ][] = 'The password should be minimum 8 characters long';
        }
        // Über preg_match mit den regulären Ausdruck '/[a-z]/' überprüfen ob das Passwort kleinbuchstaben enthält
        if ( preg_match( '/[a-z]/', $password ) === 0 ) {
            $this->errors[ 'password' ][] = 'The password should contain lowercase characters';
        }
        // Über preg_match mit den regulären Ausdruck '/[A-Z]/' überprüfen ob das Passwort Großbuchstaben enthält
        if ( preg_match( '/[A-Z]/', $password ) === 0 ) {
            $this->errors[ 'password' ][] = 'The password should contain uppercase characters';
        }
        // Über preg_match mit den ruglären Ausdruck '/\d/' überprüfen ob das Passwort Zahlen enthält
        if ( preg_match( '/\d/', $password ) === 0 ) {
            $this->errors[ 'password' ][] = 'The password should contain digits';
        }
        // Über preg_match mit den ruglären Ausdruck '/\W/' überprüfen ob das Passwort Sonderzeichen enthält
        if ( preg_match( '/\W/', $password ) === 0 ) {
            $this->errors[ 'password' ][] = 'The password should contain special characters';
        }
        // Über preg_match mit den regülären Ausdruck '/\s/' überprüfen ob das Passwort Leerzeichen enthält
        if ( preg_match( '/\s/', $password ) === 1 ) {
            $this->errors[ 'password' ][] = 'The password should not contain any whitespace';
        }

        return isset( $this->errors[ 'password' ] ) === FALSE;
    }

    private function validate_username( ?string $username ) : bool {
        // Überprüfen ob der Nutzer eine Eingabe vom Nutzernamen getätigt hat
        if ( is_null( $username ) || empty( $username ) ) {
            $this->errors[ 'username' ][] = 'Please type in a valid username';
        }
        // Über strlen überprüfen ob die Länge vom Nutzernamen kleiner als 4 Zeichen lang ist
        if ( strlen( $username ) < 4 ) {
            $this->errors[ 'username' ][] = 'The username should be minimum 4 characters long';
        }
        // Über strlen überprüfen ob die Länge vom Nutzernamen größer als 16 Zeichen lang ist
        if ( strlen( $username ) > 16 ) {
            $this->errors[ 'username' ][] = 'The username should be maxmimum 16 characters long';
        }
        // Über preg_match mit den regulären Ausdruck '/\s/' überprüfen ob der Nutzername whitespace enthält
        if ( preg_match( '/\s/', $username ) === 1 ) {
            $this->errors[ 'username' ][] = 'The username should not contain any whitespace';
        }

        return isset( $this->errors[ 'username' ] ) === FALSE;
    }

}

//$username = filter_input( INPUT_GET, 'username' );
//$password = filter_input( INPUT_GET, 'password' );
//$email = filter_input( INPUT_GET, 'email' );

//$registration = new Registration();
//$registration->register( $username, $password, $email );

$registration1 = new Registration();
$registration1->register( 'joh', '', '123!"§' );

$registration2 = new Registration();
$registration2->register( 'johnnnnnnnnnnnnnnn', 'test@test.de', 'asdASD' );

echo "<pre>";
var_dump( $registration1 );
var_dump( $registration2 );
echo "</pre>";
