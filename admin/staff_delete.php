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
$staff_id = $_GET['staff_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM staff_tbl WHERE staff_id=$staff_id");

//redirecting to the display page (view.php in our case)
 echo '<script type="text/javascript"> alert("Delete successfully!");
		window.location.href = "view_staff.php";</script>';
?>

