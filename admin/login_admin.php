<?php session_start(); ?>
<?php
include("../connections/connection.php");

if(isset($_POST['submit'])) {
	$user = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);

	if($user == "" || $pass == "") {
		 echo '<script type="text/javascript"> alert("Invalid username or password!");
		window.location.href = "login_admin.php";</script>';
	} else {
		$result = mysql_query("SELECT * FROM admin_tbl WHERE username='$user' AND password=md5('$pass')",$conn)
					or die("Could not execute the select query.");
		
		$row = mysql_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['admin_id'] = $row['admin_id'];
		} else {
			
			 echo '<script type="text/javascript"> alert("Invalid username or password!");
		window.location.href = "login_admin.php";</script>';
		}

		if(isset($_SESSION['valid'])) {
			
			 echo '<script type="text/javascript"> alert("User has been log-in!");
	window.location.href = "index_admin.php";</script>';	
		}
	}
} else {
?>
<html>
<head>
	<title>Login</title>
     <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>

<br><br>
<a href="../index.php">Home</a> <br /> <br /> <br />
	<p><font size="+2">Administrator Login</font></p>
	<form name="form1" method="post" action="">
		<table border="0" cellpadding="3" cellspacing="4">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
            <tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<div id="footer"><br><br>Created by <a href="#" title="Ilyas">Ilyas</a><br><br></div>
    </center>
</body>
</html>
<?php
}
?>
</center>
</body>
</html>
