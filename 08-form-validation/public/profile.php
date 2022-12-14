<?php

// Error Reporting einschalten und Fehlermeldungen im Browser ausgeben
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// Erstellen einer Konstante mit dem Dateipfad der 'data/users.txt' Datei zum speichern von Nutzerdaten
define( 'DATA_USERS', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'data' . DIRECTORY_SEPARATOR . 'users.txt'  );

// Einbinden der 'includes/users.php', welche unsere Funktion zum Arbeiten mit der users.txt Datei enthält
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'users.php';

$username = $_GET[ 'username' ] ?? 'xyz';

$user = get_user( $username );

header( 'Content-Type: application/json' );

echo json_encode( $user );