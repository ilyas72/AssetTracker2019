<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
 echo '<script type="text/javascript"> alert("Either username or password field is empty!");
	window.location.href = "login_admin.php";</script>';
}
?>

<?php
//including the database connection file
include("../connections/connection.php");

//getting id of the data from url
$laptop_id = $_GET['laptop_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM laptop_tbl WHERE laptop_id=$laptop_id");

//redirecting to the display page (view.php in our case)
 echo '<script type="text/javascript"> alert("Delete successfully!");
		window.location.href = "view_laptop.php";</script>';
?>

