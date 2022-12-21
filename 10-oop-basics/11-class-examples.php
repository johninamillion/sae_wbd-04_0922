<?php

abstract class Configuration {

    const DB_NAME = '';
    const DB_USER = '';
    const DB_PASS = '';

}

abstract class Errors {

    private static array $errors = [];

    public static function addError( string $form, string $input_name, string $error_message ) : void {
        self::$errors[ $form ][ $input_name ][] = $error_message;
    }

    public static function getError( string $form, string $input_name ) : ?string  {

        return self::$errors[ $form ][ $input_name ] ?? NULL;
    }

    public static function hasErrors( string $form, ?string $input_name = NULL ) : bool {

        return ( is_null( $input_name ) ? isset( self::$errors[ $form ] ) : isset( self::$errors[ $form ][ $input_name ] );
    }

}

abstract class Session {

    public static function set( string $key, mixed $value ) : void {

        $_SESSION[ $key ] = $value;
    }

    public static function get( string $key ) : mixed {

        return $_SESSION[ $key ] ?? NULL;
    }

    public static function start() : void {
        session_start();
    }

}

final class Database extends \PDO {



}

abstract class Model {

    protected Database $database;

}

class User extends Model {



}

class Blog extends Model {



}