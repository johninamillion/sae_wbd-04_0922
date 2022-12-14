<?php

// Error Reporting einschalten und Fehlermeldungen im Browser ausgeben
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// Session starten
session_start();

// Ausgabe der Session per var_dump
var_dump( $_SESSION );

// Erstellen einer Konstante mit dem Dateipfad der 'data/users.txt' Datei zum speichern von Nutzerdaten
define( 'DATA_USERS', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'data' . DIRECTORY_SEPARATOR . 'users.txt'  );

// Einbinden der 'includes/register.php', welche unsere Funktion zum validieren von Nutzereingaben für das Login enthält
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'login.php';
// Einbinden der 'includes/register.php', welche unsere Funktion zum validieren von Nutzereingaben für die Registrierung enthält
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'register.php';
// Einbinden der 'includes/users.php', welche unsere Funktion zum Arbeiten mit der users.txt Datei enthält
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'users.php';
// Einbinden der 'includes/users.php', welche unsere Funktion zum Arbeiten in Templates enthält
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates.php';

/** @var array $errors */
$errors = [];

// Überprüfen ob der Nutzer das Formular abgeschickt hat
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    switch( $_GET[ 'page' ] ?? NULL ) {
        // Login
        case 'login':
            if ( login( $errors ) ) {
               redirect( "?page=profile", 'login' );
            }
            break;
        // Registrierung
        default:
            if ( register( $errors ) ) {
               redirect( "?page=login", 'register' );
            }
            break;
    }
}

switch( $_GET[ 'page' ] ?? NULL ) {
    case 'login':
        // Einbinden vom Template 'login.php'
        include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'login.php';
        break;
    case 'logout':
        logout();
        // Weiterleitung zum Login
        redirect( "?page=login", 'logout' );
        break;
    case 'profile':
        if ( is_loggedin() ) {
            // Einbinden vom Template 'profile.php'
            include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'profile.php';
        }
        else {
           redirect( "?page=login", 'profile' );
        }
        break;
    default:
        // Einbinden vom Template 'register.php'
        include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'register.php';
        break;
}
