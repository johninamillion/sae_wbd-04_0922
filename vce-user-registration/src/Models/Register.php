<?php

namespace SAE\WBD04\Models;

use SAE\WBD04\Model;
use SAE\WBD04\Models\Traits\User;

final class Register extends Model {

	use User;

	public array $errors = [];

	private function validateUsername( ?string $username ) : bool {
		// Überprüfen ob der Nutzer eine Eingabe vom Nutzernamen getätigt hat
		if ( is_null( $username ) || empty( $username ) ) {
			$this->errors[ 'username' ][]= 'Please type in a valid username';
		}
		// Überprüfen ob der Nutername bereits existiert
		if ( $this->usernameExists( $username ) ) {
			$this->errors[ 'username' ][] = 'The Username already exists';
		}
		// Über strlen überprüfen ob die Länge vom Nutzernamen kleiner als 4 Zeichen lang ist
		if ( strlen( $username ) < 4 ) {
			$this->errors[ 'username' ][]= 'The username should be minimum 4 characters long';
		}
		// Über strlen überprüfen ob die Länge vom Nutzernamen größer als 16 Zeichen lang ist
		if ( strlen( $username ) > 16 ) {
			$this->errors[ 'username' ][]= 'The username should be maxmimum 16 characters long';
		}
		// Über preg_match mit den regulären Ausdruck '/\s/' überprüfen ob der Nutzername whitespace enthält
		if ( preg_match( '/\s/', $username ) === 1 ) {
			$this->errors[ 'username' ][]= 'The username should not contain any whitespace';
		}

		return isset( $this->errors[ 'username' ] ) === FALSE;
	}

	private function validateEmail( ?string $email ) : bool {
		// Überprüfen ob der Nutzer eine Eingabe von der E-Mail Addresse getätigt hat
		if ( is_null( $email ) || empty( $email ) ) {
			$this->errors[ 'email' ][] = 'Please type in a valid E-Mail address';
		}
		// Überprüfen ob die E-Mail addresse bereits existiert
		if ( $this->emailExists( $email ) ) {
			$this->errors[ 'email' ][] = 'The e-mail address already exists';
		}
		// Über filter_var mit dem Filter 'FILTER_VALIDATE_EMAIL' überprüfen ob die E-Mail Adresse valide ist
		if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === FALSE ) {
			$this->errors[ 'email' ][] = 'The e-mail address should be valid';
		}

		return isset( $this->errors[ 'email' ] ) === FALSE;
	}

	private function validatePassword( ?string $password, ?string $password_repeat ) : bool {
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
		if ( $password !== $password_repeat ) {
			$this->errors[ 'password_repeat' ][] = 'The password repeat should match the password';
		}


		return isset( $this->errors[ 'password' ] ) === FALSE && isset( $this->errors[ 'password_repeat' ] ) === FALSE;
	}

	public function registerUser( ?string $username, ?string $email, ?string $password, ?string $password_repeat ) : bool {
		/** @var bool $validate_username */
		$validate_username = $this->validateUsername( $username );
		/** @var bool $validate_email */
		$validate_email = $this->validateEmail( $email );
		/** @var bool $validate_password */
		$validate_password = $this->validatePassword( $password, $password_repeat );

		if ( $validate_username && $validate_email && $validate_password ) {
			// Database Query
			// $this->Database - TODO: wright Datas in Database
		}

		return FALSE;
	}

}