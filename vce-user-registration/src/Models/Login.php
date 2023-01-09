<?php

namespace SAE\WBD04\Models;

use SAE\WBD04\Model;
use SAE\WBD04\Models\Traits\User;

final class Login extends Model {

	use User;

	private function getCredentials( ?string $username ) : array {
		// Database Query
		// Select in Database
	}

	public function loginUser( ?string $username, ?string $password ) : bool {
		if ( $this->usernameExists( $username ) ) {
			$credentials = $this->getCredentials( $username );
		}

		return FALSE;
	}

}