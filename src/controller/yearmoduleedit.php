<?php
require_once("../model/User.php");
require_once("../model/Module.php");
require_once("../model/data/dataAccess.php");
session_start();

$level = 5;
$modules = getAllModulesForLevel($level);


require_once "../view/yearmoduleedit_view.php";

?>