<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
echo '<script type="text/javascript"> alert("User Login Successfully...!");
		window.location.href = "login.php";</script>';
}
?>

<?php
//including the database connection file
include_once("connections/connection.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM record_laptop_tbl WHERE staff_id=staff_id ORDER BY loan_laptop_id DESC");
?>

<html>
<head>
	<title>Homepage</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
<?php include("header.php"); ?>	
     <p><font size="+2">View laptop</font></p>
    <br/>    
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
       
			<td align="center">Staff Name</td>
            <td align="center">laptop no.</td>
			<td align="center">Date From</td>
			<td align="center">Time From</td>
            <td align="center">Date To</td>
			<td align="center">Time To</td>
		</tr>
        </table>
          <div style='height:250px; overflow-y:scroll; width:1010px;'>
         <table width='80%' border=0>
		<?php
		while($res = mysql_fetch_array($result)) {		
			echo "<tr>";
			echo "<td align='center'>".$res['name']."</td>";
			echo "<td align='center'>".$res['laptop_name']."</td>";
			echo "<td align='center'>".$res['date_from']."</td>";
			echo "<td align='center'>".$res['time_from']."</td>";	
			echo "<td align='center'>".$res['date_to']."</td>";
			echo "<td align='center'>".$res['time_to']."</td>";		
		}
		?>
        </tr>
	</table></div>
<?php include("footer.php"); ?>	
    </center>
</body>
</html>
