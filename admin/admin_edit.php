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
	$admin_id = $_POST['admin_id'];
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];	
	$date_reg = $_POST['date_reg'];	
	
	// checking empty fields
	if(empty($name) || empty($email) || empty($username) || empty($date_reg)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($username)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}	
		if(empty($date_reg)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysql_query("UPDATE admin_tbl SET name='$name', email='$email', username='$username', date_reg='$date_reg' WHERE admin_id=$admin_id");
		
		//redirectig to the display page. In our case, it is view.php
		 echo '<script type="text/javascript"> alert("Update successfully!");
	window.location.href = "view_admin.php";</script>';
	}
}
?>
<?php
//getting id from url
$admin_id = $_GET['admin_id'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM admin_tbl WHERE admin_id=$admin_id");

while($res = mysql_fetch_array($result))
{
	$name = $res['name'];
	$email = $res['email'];
	$username = $res['username'];
	$date_reg = $res['date_reg'];
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
  <p><font size="+2">Edit/Update Administrator</font></p>
    <br/> 
	<form name="form1" method="post" action="edit_admin.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>User Name</td>
				<td><input type="text" name="username" value=<?php echo $username;?>></td>
			</tr>
            <tr> 
				<td>Date Reg.</td>
				<td><input type="text" name="date_reg" value=<?php echo $date_reg;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="admin_id" value=<?php echo $_GET['admin_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
 <?php include("footer.php"); ?>	
    </center>
</body>
</html>
