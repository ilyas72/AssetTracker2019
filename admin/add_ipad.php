<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	 echo '<script type="text/javascript"> alert("Either username or password field is empty!");
	window.location.href = "login_admin.php";</script>';
}
?>
<?php
//including the database connection file
include_once("../connections/connection.php");

if(isset($_POST['Submit'])) {	
	$ipad_name = $_POST['ipad_name'];
	$ipad_serial = $_POST['ipad_serial'];
	$ipad_colour = $_POST['ipad_colour'];
	$ipad_mac_id = $_POST['ipad_mac_id'];
	$date_purchase = $_POST['date_purchase'];
	$ipad_model = $_POST['ipad_model'];

		
	// checking empty fields
	if(empty($ipad_name) || empty($ipad_serial) || empty($ipad_colour) || empty($ipad_mac_id) || empty($date_purchase) || empty($ipad_model)) {
				
		if(empty($ipad_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($ipad_serial)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($ipad_colour)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($ipad_mac_id)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($date_purchase)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($ipad_model)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO ipad_tbl(ipad_name, ipad_serial, ipad_colour, ipad_mac_id, date_purchase, ipad_model) VALUES('$ipad_name','$ipad_serial','$ipad_colour','$ipad_mac_id','$date_purchase','$ipad_model')");
		
		//display success message
		 echo '<script type="text/javascript"> alert("Data added successfully!");
	window.location.href = "view_ipad.php";</script>';

	}
}
?>
<html>
<head>
	<title>Add Data</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
 <?php include("header.php"); ?>	
  <p><font size="+2">Add New Ipad</font></p>
    <br/> 
	<form action="add_ipad.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Ipad Name</td>
				<td><input type="text" name="ipad_name"></td>
			</tr>
			<tr> 
				<td>Serial</td>
				<td><input type="text" name="ipad_serial"></td>
			</tr>
			<tr> 
				<td>Colour</td>
				<td><input type="text" name="ipad_colour"></td>
			</tr>
            <tr> 
				<td>MAC ID</td>
				<td><input type="text" name="ipad_mac_id"></td>
			</tr>
            <tr> 
				<td>Date Purchase</td>
				<td><input type="text" name="date_purchase"></td>
			</tr>
            <tr> 
				<td>Model</td>
				<td><input type="text" name="ipad_model"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
 <?php include("footer.php"); ?>	
    </center>
</body>
</html>
