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

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM staff_tbl WHERE staff_id ORDER BY staff_id DESC");
?>

<html>
<head>
	<title>Homepage</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
     <?php include("header.php"); ?>	
  <p><font size="+2">View Administrator</font></p>
    <br/> 
	<table cellpadding="3" cellspacing="4" width="100%">
		<tr bgcolor='#CCCCCC'>
			<td align="center" width="50">Name</td>
			<td align="center" width="130">Email</td>
			<td align="center" width="30">User Name</td>
            <td align="center" width="30">Date Register</td>
			<td align="center" width="30">Update</td>
		</tr>
        </table>  
  <div style='height:450px; overflow-y:scroll;'> 
  <table border=0 class="table" cellpadding="3" cellspacing="4" width="100%">   
		<?php
		while($res = mysql_fetch_array($result)) {		
			echo "<tr>";
			echo "<td align='center' width='60'>".$res['name']."</td>";
			echo "<td align='center' width='130'>".$res['email']."</td>";
			echo "<td align='center' width='30'>".$res['username']."</td>";
			echo "<td align='center' width='30'>".$res['date_reg']."</td>";	
			echo "<td align='center' width='30'><a href=\"edit_staff.php?staff_id=$res[staff_id]\">Edit</a> | <a href=\"delete_staff.php?staff_id=$res[staff_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
	</table>  	
   </div>
    <table border=0 class="table" cellpadding="3" cellspacing="4" width="100%"> 
     <tr bgcolor='#CCCCCC'>
			<td align="center" colspan="8">&nbsp;</td>
		</tr>
	</table>  	
    <?php include("footer.php"); ?>	
    </center>	
</body>
</html>
