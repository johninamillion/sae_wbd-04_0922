<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// nachdem aufruf von Session haben wir Zugriff auf die Superglobale $_SESSION;
session_start();

//$_SESSION[ 'login' ] = TRUE;
var_dump( $_SESSION );

