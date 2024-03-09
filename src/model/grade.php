<?php

class Grade {
	private $id;
	private $assignmentId;
	private $scenarioId;
	private $obtainedGrade;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}