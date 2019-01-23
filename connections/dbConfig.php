<?php
$dbHost = 'localhost';
$dbUser = 'Designer';
$dbPass = 'design';
$dbName = 'system_loan';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>