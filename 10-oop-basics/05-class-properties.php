<?php

class Example {

    // Mit private schließen wir eine Manipulierung der Eigenschaft $i außerhalb der Klasse Exampel aus.
    private int $i = 0;

    // Mit protected erlauben wir das die Eigenschaft (Property) in Klassen die von der Klasse Example erben manipuliert werden darf
    protected int $j = 0;

    // Mit public erlauben wir das die Eigenschaft (Property) $k öffentlich manipuliert werden darf
    // Wir können den Wert ändern, aber nicht den Typen Integer
    public int $k = 0;

    public function changeI() : void {
        // $this ist eine Variable die sich auf die jeweilige Instanz bezieht
        $this->i = 1;
    }

    public function changeJ() : void {
        $this->j = 1;
    }

}

class Example_Child extends Example {

    // Wir überschreiben den Wert der Eigenschaft (Property) $j
    protected int $j = 1;

    // Wir überschreiben den Wert der Eigenschaft (Property) $k
    public int $k = 1;

}

// Eine Instanz der Klasse Example erstellen
$example = new Example();
// Der Wert der Eigenschaft $k wird auf 1 gesetzt (Für die Instanz) (public property)
$example->k = 1;
// Der Wert der Eigenschaft $i wird über die public method changeI auf 1 gesetzt (Öffentlich haben wir keinen Zugriff)
$example->changeI();
// Der Wert der Eigenschaft $i wird über die public method changeI auf 1 gesetzt (Öffentlich haben wir keinen Zugriff)
$example->changeJ();
// Erstellen eines neuen Wertes, dieser ist Objektgebunden und nicht in der Klasse vorhanden
$example->l = 1;

echo "Eine Instanz (Example):";
echo "<pre>";
var_dump( $example );
echo "</pre>";
echo "Eine neue Instanz (Example):";
echo "<pre>";
var_dump( new Example() );
echo "</pre>";
echo "Eine neue Instanz (Example_Child):";
echo "<pre>";
var_dump( new Example_Child() );
echo "</pre>";
