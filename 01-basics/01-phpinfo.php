<?php

/*
 * Die Funktion 'phpinfo' liefert Informationen zur PHP Konfiguration auf einem Server.
 *
 * DIESE INFORMATIONEN SOLLTE NICHT ÖFFENTLICH ZUGÄNGLICH FÜR NUTZER UNSERER ANWENDUNG SEIN!
 * DIE AUSGABE DER SERVERKONFIGURATION DIENT LEDIGLICH ALS HILFE IN DER ENTWICKLUNG!
 *
 * php.net Referenz:
 * https://www.php.net/manual/de/function.phpinfo.php
 *
 * Wichtigste Konfigurationsbestandteile (Im Bezug auf die Vorlesungen):
 * display_errors           legt fest ob Fehlermeldungen Ausgegeben werden
 * file_uploads             legt fest ob der Upload von Dateien zulässig ist
 * max_file_uploads         legt die maximale Anzahl paralleler Dateiuploads fest
 * upload_max_filesize      legt die maximale Dateigröße von einem Dateiupload fest
 *
 * Wichtige Erweiterungen:
 * GD           wird für die Bildbearbeitung mit Hilfe von PHP verwendet
 * https://www.php.net/manual/de/book.image.php
 * gettext      wird für die Internationalisierung (i18n) und Lokalisierung (l10n) von PHP Anwendungen verwendet
 * https://www.php.net/manual/de/book.gettext.php
 * mysqli       wird verwendet um mit PHP eine Datenbankverbindung zu einer MySQL-Datenbank aufzubauen und operationen auszuführen (PDO wird empfohlen)
 * https://www.php.net/manual/de/book.mysqli.php
 * PDO          wird verwendet um mit PHP eine Datenbankverbindung zu einer Datenbank aufzubauen und operationen auszuführen.
 * https://www.php.net/manual/de/book.pdo.php
 */

// Funktionsaufruf von 'phpinfo'
phpinfo();