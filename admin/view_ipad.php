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
$result = mysql_query("SELECT * FROM ipad_tbl WHERE ipad_id ORDER BY ipad_id DESC");
?>

<html>
<head>
	<title>Homepage</title>
     <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
     <?php include("header.php"); ?>	
  <p><font size="+2">View Ipad</font></p>
    <br/> 
	<table border=0 class="table" cellpadding="3" cellspacing="4" width="100%">
		<tr bgcolor='#CCCCCC'>
			<td align="center" width="30">No.</td>
            <td align="center" width="90">Ipad Name</td>
			<td align="center" width="150">Serial</td>
			<td align="center" width="90">Colour</td>
            <td align="center" width="90">MAC ID</td>
            <td align="center" width="90">Date Purchase</td>
            <td align="center" width="90">Model</td>
			<td align="center" width="90">Update</td>
		</tr>
        </table>  
  <div style='height:450px; overflow-y:scroll;'> 
  <table border=0 class="table" cellpadding="3" cellspacing="4">   
		<?php
		
		while($res = mysql_fetch_array($result)) {		
	echo "<tr>";
    echo "<td align='center' width='30'>".$res['ipad_id']."</td>";
	echo "<td align='center' width='90'>".$res['ipad_name']."</td>";
	echo "<td align='center' width='150'>".$res['ipad_serial']."</td>";
	echo "<td align='center' width='90'>".$res['ipad_colour']."</td>";
	echo "<td align='center' width='90'>".$res['ipad_mac_id']."</td>";
	echo "<td align='center' width='90'>".$res['date_purchase']."</td>";
	echo "<td align='center' width='90'>".$res['ipad_model']."</td>";	
	echo "<td align='center' width='90'><a href=\"edit_ipad.php?ipad_id=$res[ipad_id]\">Edit</a> | <a href=\"delete_ipad.php?ipad_id=$res[ipad_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a</td>";		
	echo "</tr>";
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
