<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

/** @var array $errors */
$errors = [];

// einbinden der config.php mit Hilfe eines relativen Pfades zum aktuellen Verzeichnis
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';

// einbinden der translation.php
require_once APPLICATION_DIR . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'translation.php';

// einbinden der templates.php mit Hilfe von APPLICATION_DIR aus der config.php
require_once APPLICATION_DIR . DIRECTORY_SEPARATOR . 'functions.php';

// ausführen der funktion 'load_translations' aus der 'translation.php'
load_translations();

// überprüfen ob der Request von der Methode Post ist, und der Nutzer das Formular abgeschickt hat
if ( form_submitted() ) {
    register( $errors );
}

// einbinden des register.php Templates mit Hilfe von APPLICATION_DIR
include_once APPLICATION_DIR . DIRECTORY_SEPARATOR . 'register.php';
