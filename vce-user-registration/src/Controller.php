<?php

namespace SAE\WBD04;

abstract class Controller {

	const REQUEST_METHOD_GET 	= 'GET';
	const REQUEST_METHOD_POST 	= 'POST';

	protected Model $Model;

	abstract public function index() : void;

	protected function isMethod( string $method ) : bool {

		return $_SERVER[ 'REQUEST_METHOD' ] === $method;
	}

}