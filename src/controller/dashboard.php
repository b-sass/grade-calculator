<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

$user = $_SESSION["loggedInUser"][0];
$modules4 = getUserModulesForLevel($user->userID, 4);
$modules5 = getUserModulesForLevel($user->userID, 5);
$modules6 = getUserModulesForLevel($user->userID, 6);

require_once "../view/dashboard_view.php";


?>