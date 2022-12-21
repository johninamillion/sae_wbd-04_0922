<?php

class Example {

    public static bool $engine = FALSE;

    public static function start() : void {
        // self bezieht sich bei einem Aufruf immer auf Example
//        self::$engine = TRUE;
        // static bezieht sich bei einem Aufruf über die Klasse Example auf Example
        // static bezieht sich bei einem Aufruf über die Klasse Example_Child auf Example_child
        static::$engine = TRUE;
        // self bezieht sich bei einem Aufruf über die Klasse Example auf Example und ruft Example::sayHello() auf;
//        self::sayHello();
        // static bezieht sich bei einem Aufruf über die Klasse Example auf Example und ruft Example::sayHello() auf;
        // static bezieht sich bei einem Aufruf über die Klasse Example_Child auf Example_Child und ruft Example_Child::sayHello() auf;
        static::sayHello();
    }

    protected static function sayHello() : void {
        echo "Hallo Welt!";
    }

}

class Example_Child extends Example {

    public static bool $engine = FALSE;

    protected static function sayHello() : void {
        echo "Hello World!";
    }

}

echo "<pre>";
var_dump( Example::$engine );
Example::start();
Example_Child::start();

var_dump( Example::$engine );
var_dump( Example_Child::$engine );
echo "</pre>";
