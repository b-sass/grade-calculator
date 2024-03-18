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

	// Hack
	foreach ($degreeModules as $i=>$modules) {
		// Get all modules for each year
		for ($j = 0; $j < count($modules); $j++) {
			// Add each module in a year to a 2D array because
			// its easier to parse it later in the view
			// sue me
			$grades[$i][$j] = getCurrentModuleGrade($user->userID,$modules[$j]->moduleCode);
		}
	}
	// TODO: find a better way of doing this

	require_once ("../view/dashboard_view.php");
}