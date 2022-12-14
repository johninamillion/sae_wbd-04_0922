<?php

function print_input_errors( array $errors, string $input_name ) : void {
    if ( isset( $errors[ $input_name ] ) ) {
        echo "<ul class=\"errors-list\">";
        foreach( $errors[ $input_name ] as $error_msg ) {
            echo "<li class=\"errors-list__item\">{$error_msg}</li>";
        }
        echo "</ul>";
    }
}

function redirect( string $target, ?string $source = NULL ) : void {
    if ( is_null( $source ) ) {
        header( "Location: {$target}" );
    }
    else {
        header( "Location: {$target}&redirect={$source}" );
    }
}