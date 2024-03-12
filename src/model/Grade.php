<?php

class Grade {
	private $gradeID;
	private $assignmentID;
	private $scenarioID;
	private $obtainedGrade;
	private $gradeWeight;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}