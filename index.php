<?php session_start(); ?>
<?php
	if(isset($_SESSION['valid'])) {			
		include("connections/connection.php");					
		$result = mysql_query("SELECT * FROM login", $conn);
	?><br>
<?php 
} 
?>	
<html>
<head>
	<title>Welcome to Madrasah Irsyad Zuhri - Loan System!</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="content"><br/><br/><br/><br/> 
     <p><font size="+2">Welcome to Madrasah Irsyad Zuhri<br>Loan System!</font></p>
    <br/><br/>  
<p align="center">     
<table border='0' cellspacing='9' cellpadding='14'>
    <tr>
      <td align='center'><a href='admin/login_admin.php'><img src='images/admin_icon.png' width='142' height='142' alt='Admin'/></a></td>
      <td align='center'><a href='login.php'><img src='images/users_icon.png' width='142' height='142' alt='Staff'/></a></td>
    </tr>
    <tr>
      <td align='center'><a href='admin/login_admin.php'>Login Admin</a></td>
      <td align='center'><a href='login.php'>Login User</a></td>
    </tr>
</table>
</p>
</div>
<?php include("footer.php"); ?>	  
</body>
</html>
