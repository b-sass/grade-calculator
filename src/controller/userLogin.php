<?php
require_once("../model/data/dataAccess.php");
require_once("../model/User.php");
session_start();

// Get both email and password from the login form
$email = $_REQUEST["email"];
$pass = $_REQUEST["password"]; 

// Check if username is provided, login form doesn't ask for the username
if(isset($_REQUEST["username"])) {
	signup($pdo, $email, $_REQUEST["username"], $pass);
}
else{
	login($pdo, $email, $pass);
}

function login($pdo, $email, $pass) {
	// Check if a user with the provided email and password exists
	$sql = "SELECT * FROM User WHERE email = ? AND password = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email, $pass]);
	$profile = $stmt->fetchAll(PDO::FETCH_CLASS, "User"); // Will return null if the user doesn't exist
	
	if(sizeof($profile) == 1) {
		// If they do, log in
		$_SESSION["loggedInUser"] = $profile;
		require_once("../controller/dashboard.php");
	}
	else {
		// If they don't, go to the signup page
		require_once("../controller/signup.php");
	}
}

function signup($pdo, $email, $username, $pass) {
	// Check if an account with the provided email exists
	$sql = "SELECT * FROM User WHERE email = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email]);
	$profile = $stmt->fetchAll();
	
	if(sizeof($profile) == 1) {
		// If it does, go to the login page.
		require_once("../controller/login.php");
	}

	// Insert a user with the provided details to the Users table
	$sql = "INSERT INTO User (email, username, password)
			VALUES (?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email, $username, $pass]);
	// Then, go back to login
	require_once("../controller/login.php");
}
	
?>