<?php
require_once("../model/Grade.php");
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

if (!isset($_SESSION["loggedInUser"])) {
	require_once("../controller/login.php");
}
else {

	$user = $_SESSION["loggedInUser"];
	$degreeModules = array(
				getUserModulesForLevel($user->userID, 4),
				getUserModulesForLevel($user->userID, 5),
				getUserModulesForLevel($user->userID, 6)
				);

	foreach ($degreeModules as $i=>&$modules) {
		// Get all modules for each year
		for ($j = 0; $j < count($modules); $j++) {
			// Add each module in a year to a 2D array
			$modules[$j]->setIsFilled($user);
			$moduleGrades[$i][$j] = getCurrentModuleGrade($user->userID,$modules[$j]->moduleCode);
		}
	}

	if (!isset($editedLevel)) {
		$editedLevel = 4;
	}

	require_once ("../view/dashboard_view.php");
}