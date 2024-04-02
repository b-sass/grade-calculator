<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

// Get chosen modules
$modules = array(
			$_REQUEST["module1"],
			$_REQUEST["module2"],
			$_REQUEST["module3"],
			$_REQUEST["module4"]
			);

// Get the user + which year he wants to update modules for
$level = $_SESSION["moduleLevel"];
$user = $_SESSION["loggedInUser"];

// Get all of their modules for the year and delete them
$currentModules = getUserModulesForLevel($user->userID, $level);

foreach ($currentModules as $m) {
	deleteModuleForUser($user->userID, $m->moduleCode);
}

// Replace them with new modules
foreach ($modules as $m) {
	addModuleForUser($user->userID, $m);
};

$editedLevel = $level;

// Go back to the dashboard
require_once("../controller/dashboard.php");