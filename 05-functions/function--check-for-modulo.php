<?php

/**
 * Check for Modulo
 *
 * Return TRUE if an integer ($i) is divisible by another integer ($j)
 *
 * @param   int     $i
 * @param   int     $j
 * @return  bool
 */
function check_for_modulo( int $i, int $j ) : bool {

    return $i % $j === 0;
}

var_dump( check_for_modulo( 20, 5 ) );
var_dump( check_for_modulo( 21, 5 ) );