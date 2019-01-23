<?php session_start(); ?>
<?php
	if(isset($_SESSION['valid'])) {			
		include("connections/connection.php");					
		$result = mysql_query("SELECT * FROM login", $conn);
	?>
<html>
<head>
	<title>Homepage</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
  <?php include("header.php"); ?>	
  <p><font size="+2">Welcome to my page!</font></p>
    <br/> 
	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login_admin.php'>Login</a>";
	}
	?>
	 <?php include("footer.php"); ?>	
    </center>
</body>
</html>
