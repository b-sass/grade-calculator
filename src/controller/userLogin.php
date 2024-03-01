<?php
require_once("./dataAccess.php");
require_once("../model/user.php");

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
	$sql = "SELECT * FROM Users WHERE email = ? AND password = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email, $pass]);
	$profile = $stmt->fetchAll(); // Will return an empty array if the user doesn't exist
	
	if(sizeof($profile) == 1) {
		// If they do, log in
		require_once("../view/dashboard_view.php");
	}
	else {
		// If they don't, go to the signup page
		header("Location: ../../signup.php");
		exit(); // not calling exit() after header() can cause unintended behaviour
	}
}

function signup($pdo, $email, $username, $pass) {
	// Check if an account with the provided email exists
	$sql = "SELECT * FROM Users WHERE email = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email]);
	$profile = $stmt->fetchAll();
	
	if(sizeof($profile) == 1) {
		// If it does, go to the login page.
		header("Location: ../view/login.php");
		exit();
	}

	// Insert a user with the provided details to the Users table
	$sql = "INSERT INTO Users (email, username, password)
			VALUES (?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email, $username, $pass]);
	// Then, go back to login
	header("Location: ../view/login.php");
	exit();
}
	
?>