<?php
require_once("../model/Assignment.php");
require_once("../model/Grade.php");
require_once("../model/Module.php");
require_once("../model/User.php");
require_once("../model/data/dataAccess.php");
session_start();

// Get grades for each assignment
$grades = $_REQUEST["grade"];
$ids = $_REQUEST["assignmentID"];
$user = $_SESSION["loggedInUser"];

foreach ($grades as $key=>$g) {
	if ($g != null) {
		setOrAddGrade($user->userID, $ids[$key], $g);
	}
}

require_once("../controller/dashboard.php");