<?php

namespace SAE\WBD04;

abstract class Model {

	protected Database $Database;

	public function __construct() {
		$this->Database = new Database();
	}

}