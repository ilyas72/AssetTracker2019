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
	$ipad_id = $_POST['ipad_id'];
	
	$ipad_name = $_POST['ipad_name'];
	$ipad_serial = $_POST['ipad_serial'];
	$ipad_colour = $_POST['ipad_colour'];	
	$ipad_mac_id = $_POST['ipad_mac_id'];
	$ipad_model = $_POST['ipad_model'];
	$date_purchase = $_POST['date_purchase'];	
	
	// checking empty fields
	if(empty($ipad_name) || empty($ipad_serial) || empty($ipad_colour) || empty($ipad_mac_id) || empty($ipad_model) || empty($date_purchase)) {
				
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
		if(empty($ipad_model)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($date_purchase)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysql_query("UPDATE ipad_tbl SET ipad_name='$ipad_name', ipad_serial='$ipad_serial', ipad_colour='$ipad_colour', ipad_mac_id='$ipad_mac_id', ipad_model='$ipad_model', date_purchase='$date_purchase' WHERE ipad_id=$ipad_id");
		
		//redirectig to the display page. In our case, it is view.php
		 echo '<script type="text/javascript"> alert("Update successfully!");
	window.location.href = "view_ipad.php";</script>';
	}
}
?>
<?php
//getting id from url
$ipad_id = $_GET['ipad_id'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM ipad_tbl WHERE ipad_id=$ipad_id");

while($res = mysql_fetch_array($result))
{
	$ipad_name = $res['ipad_name'];
	$ipad_serial = $res['ipad_serial'];
	$ipad_colour = $res['ipad_colour'];
	$ipad_mac_id = $res['ipad_mac_id'];
	$ipad_model = $res['ipad_model'];
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
  <p><font size="+2">Edit/Update Ipad</font></p>
    <br/> 
	<form name="form1" method="post" action="edit_ipad.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="ipad_name" value=<?php echo $ipad_name;?>></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="ipad_serial" value=<?php echo $ipad_serial;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="ipad_colour" value=<?php echo $ipad_colour;?>></td>
			</tr>
            <tr> 
				<td>Name</td>
				<td><input type="text" name="ipad_mac_id" value=<?php echo $ipad_mac_id;?>></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="ipad_model" value=<?php echo $ipad_model;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="date_purchase" value=<?php echo $date_purchase;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="ipad_id" value=<?php echo $_GET['ipad_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
<?php include("footer.php"); ?>	
    </center>
</body>
</html>
