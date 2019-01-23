<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  echo '<script type="text/javascript"> alert("Either username or password field is empty!");
	window.location.href = "login_admin.php";</script>';
}
?>

<?php
// including the database connection file
include_once("../connections/connection.php");

if(isset($_POST['update']))
{	
	$laptop_id = $_POST['laptop_id'];
	
	$laptop_name = $_POST['laptop_name'];
	$laptop_serial = $_POST['laptop_serial'];
	$laptop_colour = $_POST['laptop_colour'];	
	$laptop_mac_id = $_POST['laptop_mac_id'];
	$laptop_model = $_POST['laptop_model'];
	$date_purchase = $_POST['date_purchase'];	
	
	// checking empty fields
	if(empty($laptop_name) || empty($laptop_serial) || empty($laptop_colour) || empty($laptop_mac_id) || empty($laptop_model) || empty($date_purchase)) {
				
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
		if(empty($laptop_model)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($date_purchase)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysql_query("UPDATE laptop_tbl SET laptop_name='$laptop_name', laptop_serial='$laptop_serial', laptop_colour='$laptop_colour', laptop_mac_id='$laptop_mac_id', laptop_model='$laptop_model', date_purchase='$date_purchase' WHERE laptop_id=$laptop_id");
		
		//redirectig to the display page. In our case, it is view.php
		 echo '<script type="text/javascript"> alert("Update successfully!");
	window.location.href = "view_laptop.php";</script>';
	}
}
?>
<?php
//getting id from url
$laptop_id = $_GET['laptop_id'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM laptop_tbl WHERE laptop_id=$laptop_id");

while($res = mysql_fetch_array($result))
{
	$laptop_name = $res['laptop_name'];
	$laptop_serial = $res['laptop_serial'];
	$laptop_colour = $res['laptop_colour'];
	$laptop_mac_id = $res['laptop_mac_id'];
	$laptop_model = $res['laptop_model'];
	$date_purchase = $res['date_purchase'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
     <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
  <?php include("header.php"); ?>	
  <p><font size="+2">Edit/Update laptop</font></p>
    <br/> 
	<form name="form1" method="post" action="edit_laptop.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="laptop_name" value=<?php echo $laptop_name;?>></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="laptop_serial" value=<?php echo $laptop_serial;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="laptop_colour" value=<?php echo $laptop_colour;?>></td>
			</tr>
            <tr> 
				<td>Name</td>
				<td><input type="text" name="laptop_mac_id" value=<?php echo $laptop_mac_id;?>></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="laptop_model" value=<?php echo $laptop_model;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="date_purchase" value=<?php echo $date_purchase;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="laptop_id" value=<?php echo $_GET['laptop_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
<?php include("footer.php"); ?>	
    </center>
</body>
</html>
