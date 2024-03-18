<?php
require_once("../model/User.php");
require_once("../model/data/dataAccess.php");
session_start();

$user = $_SESSION["loggedInUser"];
$warning = "";

if($_REQUEST["email"] != "") {
	$email = $_REQUEST["email"];
	updateEmailForUser($user->userID, $email);
	$warning .= "<br>Email changed."; 
}

if($_REQUEST["pass"] != "") {
	$pass = $_REQUEST["pass"];
	updatePassForUser($user->userID, $pass);
	$warning .= "<br>Password changed.";
}

$warning .= "<br>You have been logged out.";
session_unset();
$_SESSION["warning"] = $warning;

require_once("../controller/home.php");