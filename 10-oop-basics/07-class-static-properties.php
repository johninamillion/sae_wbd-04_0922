<?php

class Example {

    // Mit private schließen wir eine Manipulierung der Eigenschaft $i außerhalb der Klasse Exampel aus.
    private static int $i = 0;

    // Mit protected erlauben wir das die Eigenschaft (Property) in Klassen die von der Klasse Example erben manipuliert werden darf
    protected static int $j = 0;

    // Mit public erlauben wir das die Eigenschaft (Property) $k öffentlich manipuliert werden darf
    // Wir können den Wert ändern, aber nicht den Typen Integer
    public static int $k = 0;

}

class Example_Child extends Example {

    protected static int $j = 2;

    public static int $k = 2;

}

$example = new Example();
$example2 = new Example();
$example::$k = 1;

echo "Eine Instanz (Example):";
echo "<pre>";
var_dump( $example::$k );
echo "</pre>";
echo "Eine neue Instanz (Example):";
echo "<pre>";
var_dump( $example2::$k );
echo "</pre>";
echo "<pre>";
var_dump( Example_Child::$k );
echo "</pre>";