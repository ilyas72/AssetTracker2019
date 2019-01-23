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
$result = mysql_query("SELECT * FROM laptop_tbl WHERE laptop_id ORDER BY laptop_id DESC");
?>

<html>
<head>
	<title>Homepage</title>
     <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
     <?php include("header.php"); ?>	
  <p><font size="+2">View laptop</font></p>
    <br/> 
	<table border=0 class="table" cellpadding="3" cellspacing="4" width="100%">
		<tr bgcolor='#CCCCCC'>
			<td align="center" width="30">No.</td>
            <td align="center" width="90">laptop Name</td>
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
    echo "<td align='center' width='30'>".$res['laptop_id']."</td>";
	echo "<td align='center' width='90'>".$res['laptop_name']."</td>";
	echo "<td align='center' width='150'>".$res['laptop_serial']."</td>";
	echo "<td align='center' width='90'>".$res['laptop_colour']."</td>";
	echo "<td align='center' width='90'>".$res['laptop_mac_id']."</td>";
	echo "<td align='center' width='90'>".$res['date_purchase']."</td>";
	echo "<td align='center' width='90'>".$res['laptop_model']."</td>";	
	echo "<td align='center' width='90'><a href=\"edit_laptop.php?laptop_id=$res[laptop_id]\">Edit</a> | <a href=\"delete_laptop.php?laptop_id=$res[laptop_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a</td>";		
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
