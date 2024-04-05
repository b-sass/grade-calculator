<?php
require_once("../model/data/dataAccess.php");
require_once("../model/User.php");
session_start();

// Get both email and password from the login form
$email = htmlentities($_REQUEST["email"]);
$pass  = htmlentities($_REQUEST["password"]);

if(isset($_REQUEST["username"])) { // signup
	$username = htmlentities($_REQUEST["username"]);
	if(signup($email, $username, $pass)) {
		// signup successful
		$_SESSION["warning"] = "Account created, please login.";
	}
	else {
		// signup failed: email exists
		$_SESSION["warning"] = "User with this email already exists";
	}
	require_once("../controller/login.php");
}
else { // login
	$user = login($email, $pass);
	if ($user) {
		// valid credential (login returned a user)
		$_SESSION["loggedInUser"] = $user;
		require_once("../controller/dashboard.php");
	}
	else {
		// login returned null (invalid credentials)
		$_SESSION["warning"] = "User with provided details does not exist.";
		require_once("../controller/signup.php");
	}
}
	
?>