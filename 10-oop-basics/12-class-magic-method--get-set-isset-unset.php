<?php

class Example {

    private array $data = [];

//    public string $a;

    public function __set( string $key, mixed $value ) : void {

        $this->data[ $key ] = $value;
    }

    public function __get( string $key ) : mixed {

        return $this->data[ $key ] ?? NULL;
    }

    public function __isset( string $key ) : bool {

        return isset( $this->data[ $key ] );
    }

    public function __unset( string $key ) : void {

        unset( $this->data[ $key ] );
    }

}

// __construct()
$example = new Example();
// __set( $key, $value)
$example->a = 'A';
$example->b = 'B';
$example->c = 'C';
// __get( $key )
$a = $example->a;
// __isset( $key )
isset( $example->a );
// __unset( $key )
unset( $example->a );

var_dump( $example );