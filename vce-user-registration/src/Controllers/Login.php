<?php

namespace SAE\WBD04\Controllers;

use SAE\WBD04\Controller;
use SAE\WBD04\Models\Login as LoginModel;


final class Login extends Controller {

	public function __construct() {
		$this->Model = new LoginModel();
	}

	public function index() : void {
		// Anfrage an die Seite durch einen Aufruf der URL
		if ( $this->isMethod( self::REQUEST_METHOD_GET ) ) {
			// einfaches einbinden des Templates
			include_once TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'login' . DIRECTORY_SEPARATOR . 'index.php';
		}
		// Anfrage an die Seite durch abschicken des Registrierungsformulars
		elseif ( $this->isMethod( self::REQUEST_METHOD_POST ) ) {
			$username = filter_input( INPUT_POST, 'username' );
			$password = filter_input( INPUT_POST, 'password' );

			if ( $this->Model->loginUser( $username, $password ) ) {
				echo "SUCCESS LOGIN!";
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