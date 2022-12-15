<?php

// Error Reporting anschalten
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// Session starten
session_start();

var_dump( $_SESSION );

define( 'DATA_USERS', __DIR__ . DIRECTORY_SEPARATOR. 'data' . DIRECTORY_SEPARATOR. 'users.txt' );
