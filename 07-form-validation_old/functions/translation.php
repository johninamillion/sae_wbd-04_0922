<?php

function load_translations() : void {
    switch ( $_GET[ 'lang' ] ?? 'en' ) {
        case 'de':
            $file_lang = 'de_DE';
            break;
        default:
            $file_lang = 'en_US';
            break;
    }

    if ( putenv( "LANG={$file_lang}" ) === FALSE ) {
        // eine Warnung ausgeben
        trigger_error(
            _( 'Failed to \'putenv\'' ),
            E_USER_WARNING
        );
    }

    if ( setlocale( LC_ALL, "{$file_lang}.UTF-8" ) === FALSE ) {
        // eine Warnung ausgeben
        trigger_error(
            _( 'Faild to \'setlocale\'' ),
            E_USER_WARNING
        );
    }

    if ( bindtextdomain( 'application', LOCALES_DIR . DIRECTORY_SEPARATOR . $file_lang . DIRECTORY_SEPARATOR . 'application.mo' ) === FALSE ) {
        // eine Warnung ausgeben
        trigger_error(
            _( 'Faild to \'bindtextdomain\''),
            E_USER_WARNING
        );
    }

    if ( bind_textdomain_codeset( 'application', 'UTF-8' ) === FALSE ) {
        trigger_error(
            _( 'Failed to \'bind_textdomain_codeset\'' ),
            E_USER_WARNING
        );
    }

    textdomain( 'application' );
}
