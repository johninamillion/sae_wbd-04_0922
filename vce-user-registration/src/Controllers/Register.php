<?php

namespace SAE\WBD04\Controllers;

use SAE\WBD04\Controller;
use SAE\WBD04\Models\Register as RegisterModel;

final class Register extends Controller {

	public function __construct() {
		$this->Model = new RegisterModel();
	}

	public function index() : void {
		// Anfrage an die Seite durch einen Aufruf der URL
		if ( $this->isMethod( self::REQUEST_METHOD_GET ) ) {
			// einfaches einbinden des Templates
			include_once TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'register' . DIRECTORY_SEPARATOR . 'index.php';
		}
		// Anfrage an die Seite durch abschicken des Registrierungsformulars
		elseif ( $this->isMethod( self::REQUEST_METHOD_POST ) ) {
			$username = filter_input( INPUT_POST, 'username' );
			$email = filter_input( INPUT_POST, 'email' );
			$password = filter_input( INPUT_POST, 'password' );
			$password_repeat = filter_input( INPUT_POST , 'password_repeat' );

			if ( $this->Model->registerUser( $username, $email, $password, $password_repeat ) ) {
				echo "SUCCESS!";
			}
			else {
				var_dump( $this->Model->errors );
				include_once TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'register' . DIRECTORY_SEPARATOR . 'index.php';
			}
		}
		else {
			http_response_code( 405 );
			echo "405 - Method not allowed";
		}
	}

}