<?php

final class Example {

    private static ?Example $instance = NULL;

    public static function getInstance() : Example {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}

var_dump( Example::getInstance() );
var_dump( Example::getInstance() );