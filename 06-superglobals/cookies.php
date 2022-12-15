<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

if ( isset( $_GET[ 'cookies' ] ) ) {
    $_COOKIE[ 'cookie_consent' ] = $_GET[ 'cookies' ];
}

//var_dump( $_COOKIE );

?>

<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
    <?php if( isset( $_COOKIE[ 'cookie_consent' ] ) ): ?>

            <div>Erfolderliche Cookies</div>

        <?php if( $_COOKIE[ 'cookie_consent' ] === 'optional' ): ?>

            <div>Optionale Cookies</div>

        <?php endif; ?>

    <?php endif; ?>

<noscript>
    Das hier sieht man nur ohne JavaScript
</noscript>

    <a href="/06-superglobals/cookies.php?cookies=musthave">Erforderliche Cookies Akzeptieren</a>
    <a href="/06-superglobals/cookies.php?cookies=optional">Alle Cookies Akzeptieren</a>
</html>
