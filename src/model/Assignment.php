<?php

class Assignment {
	private $assignmentID;
	private $moduleCode;
	private $assignmentName;
	private $assignmentWeight;
	
	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}