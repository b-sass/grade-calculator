<?php

class Module {
	private $moduleCode;
	private $moduleName;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}