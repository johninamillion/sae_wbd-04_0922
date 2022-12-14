<?php

/*
 * Error Meldungen ausgeben
 *
 * DIESE INFORMATIONEN SOLLTE NICHT ÖFFENTLICH ZUGÄNGLICH FÜR NUTZER UNSERER ANWENDUNG SEIN!
 * DIE AUSGABE VON FEHLERMELDUNGEN IM BROWSER DIENT LEDIGLICH ALS HILFE IN DER ENTWICKLUNG!
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/function.error-reporting.php
 * https://www.php.net/manual/en/function.ini-set.php
 */

// Funktionsaufruf von 'error_reporting'
// mit der Übergabe von dem Integer '32767' als Konstante 'E_ALL' als Argument für den Parameter '$error_level'
error_reporting( E_ALL );

// Funktionsaufruf von 'ini_set'
// mit der Übergabe von dem String 'display_errors' als Argument für den Parameter 'option'
// und dem String '1' als Argument für den Parameter 'value'
ini_set( 'display_errors', '1' );

/*
 * Error Meldungen erzeugen
 *
 * php.net Referenzen:
 * https://www.php.net/manual/en/function.trigger-error.php
 * https://www.php.net/manual/en/errorfunc.constants.php
 *
 * Die wichtigsten Error Level:
 * Bezeichnung      Konstante           Beschreibung
 * ---------------------------------------------------------------------------------------------------------------------
 * Deprecated       E_USER_DEPRECATED   Gibt die Möglichkeit über Funktionsaufrufe von veralteten Funktionen zu Informieren, welche in einer Zukünftigen Version vom Code entfernt werden.
 *                                      Der Programmablauf kann in einer neueren Version zu Fehlern führen und unterbrochen werden.
 * Notice           E_USER_NOTICE       Gibt die Möglichkeit eine Notiz die in der Entwicklung Helfen kann auszugeben.
 *                                      Der Programmablauf wird fortgefüht.
 * Warning          E_USER_WARNING      Gibt die Möglichkeit eine Warnung zu einem Fehler, der zu schwerwiegenden Fehlern führen kann auszugeben.
 *                                      Der Programmablauf wird fortgefüht.
 * Error            E_USER_ERROR        Gibt die Mögichkeit einen Error zu einem schwerwiegenden Fehler auszugeben.
 *                                      Der Programmablauf wird unterbrochen.
 */

// Funktionsaufruf von 'trigger_error'
// mit der Übergabe von dem String 'Deprecated Message' als Argument für den Parameter '$message'
// und dem Integer '16384' als Konstante 'E_USER_DEPRECATED' als Arguement für den Parameter '$error_level'.
// Der Programmablauf wird fortgeführt
trigger_error( 'This is a deprecated', E_USER_DEPRECATED );

// Funktionsaufruf von 'trigger_error'
// mit der Übergabe von dem String 'Deprecated Message' als Argument für den Parameter '$message'
// und dem Integer '1024' als Konstante 'E_USER_NOTICE' als Arguement für den Parameter '$error_level'.
// Dieser Aufruf erzeugt eine Fehlermeldung vom Typ 'Notice' mit der Nachricht 'This is a notice'
// Der Programmablauf wird fortgeführt
trigger_error( 'This is a notice', E_USER_NOTICE );

// Funktionsaufruf von 'trigger_error'
// mit der Übergabe von dem String 'Deprecated Message' als Argument für den Parameter '$message'
// und dem Integer '512' als Konstante 'E_USER_WARNING' als Arguement für den Parameter '$error_level'.
// Dieser Aufruf erzeugt eine Fehlermeldung vom Typ 'Warning' mit der Nachricht 'This is a warning'
// Der Programmablauf wird fortgeführt
trigger_error( 'This is a warning', E_USER_WARNING );

// Funktionsaufruf von 'trigger_error'
// mit der Übergabe von dem String 'Deprecated Message' als Argument für den Parameter '$message'
// und dem Integer '256' als Konstante 'E_USER_ERROR' als Arguement für den Parameter '$error_level'.
// Dieser Aufruf erzeugt eine Fehlermeldung vom Typ 'Error' mit der Nachricht 'This is an error'
// Der Programmablauf wird unterbrochen
trigger_error( 'This is an error', E_USER_ERROR );
