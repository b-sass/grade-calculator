<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

$year = 5;
$modules = getAllModulesForLevel($year);


require_once "../view/yearmoduleedit_view.php";

?>