<?php session_start(); ?>
<?php
if(!isset($_SESSION['valid'])) {
	 echo '<script type="text/javascript"> alert("Either username or password field is empty!");
	window.location.href = "login_admin.php";</script>';
}
?>
<?php
include("../connections/connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$date_reg = $_POST['date_reg'];

	if($user == "" || $pass == "" || $name == "" || $email == "" || $date_reg == "") {
		
	   echo '<script type="text/javascript"> alert("All fields should be filled. Either one or many fields are empty!");
		window.location.href = "add_admin.php";</script>';
	} else {
		mysql_query("INSERT INTO staff_tbl(name, email, username, password, date_reg) VALUES('$name', '$email', '$user', md5('$pass'), '$date_reg')", $conn)
			or die("Could not execute the insert query.");
			
	 echo '<script type="text/javascript"> alert("Registration successfully!");
		window.location.href = "view_staff.php";</script>';
	}
} else {
?>
<html>
<head>
	<title>Register</title>
      <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
 <?php include("header.php"); ?>	
  <p><font size="+2">Add New Staff</font></p>
    <br/> 
	<form name="form1" method="post" action="">
		<table border="0">
			<tr> 
				<td>Full Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
            <tr> 
				<td>Date Reg.</td>
				<td><input type="text" name="date_reg"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
 <?php include("footer.php"); ?>	
    </center>
</body>
</html>
