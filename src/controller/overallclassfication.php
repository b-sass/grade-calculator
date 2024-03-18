<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

if (!isset($_SESSION["loggedInUser"])) {
	require_once("../controller/login.php");
}
else {
	$user = $_SESSION["loggedInUser"];

	$level5modules = getUserModulesForLevel($user->userID, 5);
	$level6modules = getUserModulesForLevel($user->userID, 6);

	$level5grades = array(
					getCurrentModuleGrade($user->userID, $level5modules[0]->moduleCode),
					getCurrentModuleGrade($user->userID, $level5modules[1]->moduleCode),
					getCurrentModuleGrade($user->userID, $level5modules[2]->moduleCode),
					getCurrentModuleGrade($user->userID, $level5modules[3]->moduleCode)
	);

	$level6grades = array(
		getCurrentModuleGrade($user->userID, $level6modules[0]->moduleCode),
		getCurrentModuleGrade($user->userID, $level6modules[1]->moduleCode),
		getCurrentModuleGrade($user->userID, $level6modules[2]->moduleCode),
		getCurrentModuleGrade($user->userID, $level6modules[3]->moduleCode)
	);

	require_once "../view/overallclassification_view.php";
}