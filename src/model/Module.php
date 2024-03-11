<?php

class Module {
	private $moduleCode;
	private $moduleName;
	private $level;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}