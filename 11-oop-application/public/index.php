<?php

namespace SAE\WBD04;

error_reporting( E_ALL );
ini_set('display_errors' , '1' );

function autoloader( string $class ) : void {
    $replace_namespace = str_replace( 'SAE\\WBD04\\', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR, $class  );

    $replace_directory_separator = str_replace( '\\', DIRECTORY_SEPARATOR, $replace_namespace );

    $filename = "{$replace_directory_separator}.php";

    if ( file_exists( $filename ) ) {
        require_once $filename;
    }
}
spl_autoload_register( __NAMESPACE__ . '\\autoloader' );

function bootstrap_application() : void {
    // Eine anonyme Instanz der Klasse Application erstellen
    // Von dieser Instanz die Methode bootstrap aufrufen.
    ( new Application() )->bootstrap();

}

bootstrap_application();
