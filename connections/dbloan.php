<?php
$dbHost = 'localhost';
$dbUser = 'Designer';
$dbPass = 'design';
$dbName = 'system_loan';
$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
 if(!db) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>