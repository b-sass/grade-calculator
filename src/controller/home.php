<?php
require_once("../model/User.php");
session_start();

if ($_SESSION["loggedInUser"] != null) {
	require_once("../view/dashboard_view.php");
}
else {
	require_once "../view/home_view.php";
}


?>