<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

abstract class Car {

    protected bool $engine = FALSE;

    protected int $max_speed = 250;

    protected int $speed = 0;

    public function startEngine() : void {
        $this->engine = TRUE;
    }

    public function stopEngine() : void {
        $this->speed = 0;
        $this->engine = FALSE;
    }

    public function setSpeed( int $speed ) : void {
        if ( $speed > $this->max_speed ) {
            echo "The max Speed is {$this->max_speed}";

            return;
        }

        $this->speed = $speed;
    }
}

class BMW extends Car {

    protected int $max_speed = 300;



}

class Mercedes extends Car {

    // $max_speed = 250;

}

$bmw = new BMW();
$mercedes = new Mercedes();

$bmw->startEngine();
$bmw->setSpeed( 280 );
$mercedes->startEngine();
$mercedes->setSpeed( 280 );

echo "<pre>";
var_dump( $bmw );
var_dump( $mercedes );
echo "</pre>";
