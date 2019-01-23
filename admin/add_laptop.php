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
	$laptop_name = $_POST['laptop_name'];
	$laptop_serial = $_POST['laptop_serial'];
	$laptop_colour = $_POST['laptop_colour'];
	$laptop_mac_id = $_POST['laptop_mac_id'];
	$date_purchase = $_POST['date_purchase'];
	$laptop_model = $_POST['laptop_model'];

		
	// checking empty fields
	if(empty($laptop_name) || empty($laptop_serial) || empty($laptop_colour) || empty($laptop_mac_id) || empty($date_purchase) || empty($laptop_model)) {
				
		if(empty($laptop_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($laptop_serial)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($laptop_colour)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($laptop_mac_id)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($date_purchase)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($laptop_model)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO laptop_tbl(laptop_name, laptop_serial, laptop_colour, laptop_mac_id, date_purchase, laptop_model) VALUES('$laptop_name','$laptop_serial','$laptop_colour','$laptop_mac_id','$date_purchase','$laptop_model')");
		
		//display success message
		 echo '<script type="text/javascript"> alert("Data added successfully!");
	window.location.href = "view_laptop.php";</script>';

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
  <p><font size="+2">Add New laptop</font></p>
    <br/> 
	<form action="add_laptop.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>laptop Name</td>
				<td><input type="text" name="laptop_name"></td>
			</tr>
			<tr> 
				<td>Serial</td>
				<td><input type="text" name="laptop_serial"></td>
			</tr>
			<tr> 
				<td>Colour</td>
				<td><input type="text" name="laptop_colour"></td>
			</tr>
            <tr> 
				<td>MAC ID</td>
				<td><input type="text" name="laptop_mac_id"></td>
			</tr>
            <tr> 
				<td>Date Purchase</td>
				<td><input type="text" name="date_purchase"></td>
			</tr>
            <tr> 
				<td>Model</td>
				<td><input type="text" name="laptop_model"></td>
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
