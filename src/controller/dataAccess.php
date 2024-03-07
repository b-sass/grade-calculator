<?php 
$host = "sql210.infinityfree.com:3306";
$user = "if0_36021998";
$pass = "uC5FiTKBQ1ft";
$dbname = "if0_36021998_test";

// $host = "localhost";
// $user = "flare";
// $pass = "flare";
// $dbname = "testing";


$dsn = "mysql:host=". $host .";port=3306;dbname=". $dbname;

$pdo = new PDO($dsn, $user, $pass);

