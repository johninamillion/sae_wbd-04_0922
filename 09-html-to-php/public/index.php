<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// Session starten
session_start();

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'feed.php';
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'login.php';
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'register.php';
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates.php';
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'users.php';

/** @var string $page */
$page = $_GET[ 'page' ] ?? 'index';
/** @var array $errors */
$errors = [];

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    switch( $page ){
        case 'login':
            login( $errors );
            break;
        case 'register':
            if ( register( $errors ) ) {
                redirect( '?page=login', 'redirect' );
            }
            break;
    }
}

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'GET' ) {
    switch( $page ){
        case 'logout':
            logout();
            redirect( '?page=login', 'logout' );
            break;
        case 'feed':
            $feed = get_posts();
            break;
    }
}

/** @var string $template_file */
$template_file = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . "{$page}.php";

if ( file_exists( $template_file ) ) {
    include_once $template_file;
}
else {
    include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . '404.php';
}