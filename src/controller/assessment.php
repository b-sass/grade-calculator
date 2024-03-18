<?php
require_once("../model/Grade.php");
require_once("../model/Module.php");
require_once("../model/User.php");
require_once("../model/Assignment.php");
require_once("../model/data/dataAccess.php");
session_start();

$module = $_REQUEST["module"];
$user = $_SESSION["loggedInUser"];
$assignments = getAssignmentsForModule($module);


foreach ($assignments as $a) {
	$grades[] = getAssignmentGradeForUser($user->userID, $a->assignmentID);
}

require_once "../view/assessment_view.php";
?>