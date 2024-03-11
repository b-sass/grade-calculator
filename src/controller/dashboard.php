<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

$level = 5;
$user = $_SESSION["loggedInUser"];
$modules = getUserModulesForLevel($user->userID, $level);

require_once "../view/dashboard_view.php";


?>