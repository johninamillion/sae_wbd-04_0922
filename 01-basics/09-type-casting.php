<?php

/*
 * Type Casting in PHP
 *
 * php.net Referenz:
 * https://www.php.net/manual/de/language.types.type-juggling.php#language.types.typecasting
 *
 * Type Casts:
 * Schreibweise     Umwandlung zu einem Wert vom Datentyp
 * ---------------------------------------------------------------------------------------------------------------------
 * (string)         String
 * (int)            Integer
 * (float)          Float
 * (bool)           Boolean
 * (array)          Array
 * (object)         Objekt
 */

// Type Casting aus einem String
$string = "1, 2, 3 Hello World!";

// Funktionsaufruf von var_dump zur Darstellung von Datentyp und Wert
// mit einem String zu einem Integer umgewandelt
var_dump( (int) $string );          // = 1
// mit einem String zu einem Float umgewandelt
var_dump( (float) $string );        // = 1
// mit einem String zu einem Bool umgewandelt
var_dump( (bool) $string );         // = TRUE (FALSE, wenn der String leer ist)
// mit einem String zu einem Array umgewandelt
var_dump( (array) $string );        // = [ 0 => "1, 2, 3 Hallo Welt!"
// mit einem String zu einem Object umgewandelt
var_dump( (object) $string );       // = (stdClass) [ "scalar" => "1, 2, 3, Hello World!" ]

// Type Casting aus einem Integer
$int = 1;

// Funktionsaufruf von var_dump zur Darstellung von Datentyp und Wert
// mit einem Integer zu einem String umgewandelt
var_dump( (string) $int );          // = "1"
// mit einem Integer zu einem Float umgewandelt
var_dump( (float) $int );           // = 1
// mit einem Integer zu einem Bool umgewandelt
var_dump( (bool) $int );            // = TRUE (FALSE, wenn der Integer 0 ist)
// mit einem Integer zu einem Array umgewandelt
var_dump( (array) $int );           // = [ 0 => 1 ]
// mit einem Integer zu einem Object umgewandelt
var_dump( (object) $int );          // = (stdClass) [ "scalar" => 1 ]

// Type Casting aus einem Float
$float = 1.2;

// Funktionsaufruf von var_dump zur Darstellung von Datentyp und Wert
// mit einem Float zu einem String umgewandelt
var_dump( (string) $float );        // = "1.2"
// mit einem Float zu einem Integer umgewandelt
var_dump( (int) $float );           // = 1
// mit einem Float zu einem Boolean umgewandelt
var_dump( (bool) $float );          // = TRUE (FALSE, wenn der Float 0 ist)
// mit einem Float zu einem Array umgewandelt
var_dump( (array) $float );         // = [ 0 => 1.2 ]
// mit einem Float zu einem Object umgewandelt
var_dump( (object) $float );        // = (stdClass) [ "scalar" => 1.2 ]

// Type Casting aus einem Boolean
$bool = TRUE;

// Funktionsaufruf von var_dump zur Darstellung von Datentyp und Wert
// mit einem Boolean zu einem String umgewandelt
var_dump( (string) $bool );         // = "1"
// mit einem Boolean zu einem Integer umgewandelt
var_dump( (int) $bool );            // = 1
// mit einem Boolean zu einem Float umgewandelt
var_dump( (float) $bool );          // = 1
// mit einem Boolean zu einem Array umgewandelt
var_dump( (array) $bool );          // = [ 0 => TRUE ]
// mit einem Boolean zu einem Object umgewandelt
var_dump( (object) $bool );         // = (stdClass) [ "scalar" => TRUE ]

// Type Casting aus einem Array
$array = [ 'A', 'B', 'C', 'D', 'E' ];

// Funktionsaufruf von var_dump zur Darstellung von Datentyp und Wert
// mit einem Array zu einem String umgewandelt
var_dump( (string) $array );        // = "Array" (Error)
// mit einem Array zu einem Int umgewandelt
var_dump( (int) $array );           // = 1
// mit einem Array zu einem Float umgewandelt
var_dump( (float) $array );         // = 1
// mit einem Array zu einem Boolean umgewandelt
var_dump( (bool) $array );          // = TRUE (FALSE, wenn der Array leer ist)
// mit einem Array zu einem Object umgewandelt
var_dump( (object) $array );        // = (stdClass) [ "scalar" => [ 'A', 'B', 'C', 'D', 'E' ] ]