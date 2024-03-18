<?php
require_once("../model/User.php");
require_once("../model/data/dataAccess.php");
session_start();

$user = $_SESSION["loggedInUser"];

if(isset($_REQUEST["email"])) {
	$email = $_REQUEST["email"];
	updateEmailForUser($user->userID, $email);
}

if(isset($_REQUEST["pass"])) {
	$pass = $_REQUEST["pass"];
	updatePassForUser($user->userID, $pass);
}

session_destroy();
require_once("../controller/home.php");