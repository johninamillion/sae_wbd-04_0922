<?php

namespace SAE\WBD04;

use SAE\WBD04\Controllers\Login;
use SAE\WBD04\Controllers\Register;

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

define( 'TEMPLATES_DIR' , __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' );

function autoloader( string $class ) : void {
	/** @var string $namespace_to_src_dir */
	$namespace_to_src_dir = str_replace( __NAMESPACE__, __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src', $class );
	/** @var string $backslash_to_directory_seperator */
	$backslash_to_directory_seperator = str_replace( '\\', DIRECTORY_SEPARATOR, $namespace_to_src_dir );
	/** @var string $filename */
	$filename = "{$backslash_to_directory_seperator}.php";

	if ( file_exists( $filename ) ) {
		require_once $filename;
	}
}

function loadController() : void {
	switch( $_GET[ 'url' ] ) {
		case 'login':
			( new Login() )->index();
			break;
		case 'register':
			( new Register() )->index();
			break;
		default:
			http_response_code( 404 );
			echo "404 - Page not Found.";
			exit();
	}
}

spl_autoload_register( __NAMESPACE__ . '\\autoloader' );
loadController();