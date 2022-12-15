<?php

class Car {

    private bool $engine = FALSE;

    public int $speed = 0;

    public function start() : void {
        $this->engine = TRUE;
        $this->speed = 50;
    }

    public function stop() : void {
        $this->engine = FALSE;
        $this->speed = 0;
    }

    public function setSpeed( int $speed ) : void {
        $this->speed = $speed;
    }

    public function bremswegBerechnen() : float {
        return ( $this->speed / 10 ) * ( $this->speed / 10 );
    }

}

$car1 = new Car();
$car2 = new Car();

$car1->start();
$car2->start();
$car1->setSpeed( 120 );

echo "<pre>";
var_dump( $car1->bremswegBerechnen() );
var_dump( $car2->bremswegBerechnen() );
echo "</pre>";
