<?php

class Grade {
	private $gradeID;
	private $assignmentID;
	private $scenarioID;
	private $obtainedGrade;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}