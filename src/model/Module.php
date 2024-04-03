<?php

class Module {
	private $moduleCode;
	private $moduleName;
	private $level;
	private $isFilled;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}

	public function setIsFilled($user) {
		$normalAssignmentCount = getNormalAssignmentCountForModule($this->moduleCode)->assignmentCount;
		$currentAssignmentCount = getCurrentAssignmentCount($this->moduleCode, $user->userID)->filledCount;
		// echo "for module " . $this->moduleCode . ", normal count is " . $normalAssignmentCount . ". Filled count is " . $currentAssignmentCount . "<br>";
		$this->isFilled = $normalAssignmentCount == $currentAssignmentCount ? true : false; // if I dont' explicitely say true and false it ends up as 1 and null respectively
	}
}