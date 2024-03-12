<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

$level = $_REQUEST["currentTab"];
print_r($level);
$modules = getAllModulesForLevel($level);


require_once "../view/yearmoduleedit_view.php";

?>