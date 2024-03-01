<?php 
$host = "localhost";
$user = "flare";
$pass = "flare";
$dbname = "testing";


$dsn = "mysql:host=". $host .";port=3306;dbname=". $dbname;

$pdo = new PDO($dsn, $user, $pass);

