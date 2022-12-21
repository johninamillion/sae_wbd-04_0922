<?php

class Example {

    public array $data;

    public function __construct( array $data = [] ) {
        $this->data = $data;
    }

}

$example1 = new Example( [ 'a', 'b', 'c' ] );
$example2 = new Example( [ '1', '2', '3' ] );

//echo "<pre>";
//var_dump( $example1 );
//var_dump( $example2 );
//echo "</pre>";


class User {

//    public ?int $user_id;
//
//    public function __construct( ?int $user_id = NULL ) {
//        $this->user_id = $user_id;
//    }

    public ?string $username = NULL;

    public function __construct(
        public ?int $user_id = NULL
    ) {}

    public function selectUsername() : void {
        echo "SELECT username FROM USERS WHERE id = {$this->user_id}; <br>";
        $this->username = $this->user_id === 1 ? 'John' : 'Alex';
    }

    public function __toString() : string {
        return $this->username;
    }
}

$john = new User( 1 );
$alex = new User( 2 );

$john->selectUsername();
var_dump( (string) $john );
$alex->selectUsername();
var_dump( (string) $alex );
