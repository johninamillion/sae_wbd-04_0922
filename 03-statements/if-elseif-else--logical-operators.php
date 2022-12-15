<?php

// Link: https://www.php.net/manual/de/language.operators.logical.php

$var1 = TRUE;
$var2 = FALSE;

if ( $var1 && $var2 ) {
    echo "IF";
}
else if ( $var1 || $var2 ) {
    echo "ELSE-IF";
}
else {
    echo "ELSE";
}

if ( $var1 xor $var2 ) {
    echo "XOR";
}
else if ( $var1 and $var2 ) {
    echo "AND";
}
else if ( $var1 or $var2 ) {
    echo "OR";
}