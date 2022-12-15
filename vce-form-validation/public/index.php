<?php

// Error Reporting einschalten und Fehlermeldungen im Browser ausgeben
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// Einbinden der 'includes/templates.php', welche unsere Funktion zum validieren von Nutzereingaben enthält
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'functions.php';

/** @var array $errors */
$errors = [];

// Überprüfen ob der Nutzer das Formular abgeschickt hat
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    // Register aufgerufen um die Nutzereingaben zu validieren
    register( $errors );
}

// Einbinden vom Template 'register.php'
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'register.php';