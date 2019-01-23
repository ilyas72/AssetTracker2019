<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
echo '<script type="text/javascript"> alert("User Login Successfully...!");
		window.location.href = "login.php";</script>';
}
?>

<?php
// including the database connection file
include_once("connections/connection.php");

if(isset($_POST['update']))
{	
	$loan_ipad_id = $_POST['loan_ipad_id'];
	$name = $_POST['name'];
	$ipad_name = $_POST['ipad_name'];
	$date_from = $_POST['date_from'];
	$time_from = $_POST['time_from'];	
	$date_to = $_POST['date_to'];
	$time_to = $_POST['time_to'];	
	
	// checking empty fields
	if(empty($name) || empty($ipad_name) || empty($date_from) || empty($time_from) || empty($date_to) || empty($time_to)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($ipad_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($date_from)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($time_from)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}	
		if(empty($date_to)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($time_to)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysql_query("UPDATE loan_ipad_tbl SET name='$name', ipad_name='$ipad_name', date_from='$date_from', time_from='$time_from', date_to='$date_to', time_to='$time_to' WHERE loan_ipad_id=$loan_ipad_id");
		
		//redirectig to the display page. In our case, it is view.php
		echo '<script type="text/javascript"> alert("Data Update successfully!");
		window.location.href = "ipad_loan_view.php";</script>';
	}
}
?>
<?php
//getting id from url
$loan_ipad_id = $_GET['loan_ipad_id'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM loan_ipad_tbl WHERE loan_ipad_id=$loan_ipad_id");

while($res = mysql_fetch_array($result))
{
	$name = $res['name'];
	$ipad_name = $res['ipad_name'];
	$date_from = $res['date_from'];
	$time_from = $res['time_from'];
	$date_to = $res['date_to'];
	$time_to = $res['time_to'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     <style type="text/css" media="screen">@import "css/layout.css";</style>  
 <link rel="stylesheet" href="css/jquery-ui.css">
 <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", "dd mm yy" );
    });
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker1" ).datepicker( "option", "dateFormat", "dd mm yy" );
    });
  });
  </script>
  <script type="text/javascript" src="js/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css" />
   <script>
              $(function() {
                    $('#timepicker').timepicker();
					$('#timepicker1').timepicker();
                });
            </script>
<script>
function updateinput(e) {
  var selectedOption = e.options[e.selectedIndex];
  document.getElementById('stu-id').value = selectedOption.getAttribute('stu-id1');
  document.getElementById('stu-name').value = selectedOption.getAttribute('stu-name1');
  document.getElementById('nric').value = selectedOption.getAttribute('nric1');
}
</script>
<script type="text/javascript">
function testDupes() {
  var numFlds = document.myform.MyField.length;
  for (var x=0; x<numFlds; x++) {
    for (var y=x+1; y<numFlds; y++) {
      if (document.myform.MyField[x].value == document.myform.MyField[y].value) {
        alert('IPAD has been LOANs...! \nPlease choose another IPAD.');
        return false;
      }
    }
  }
  alert('IPAD Available! \nPlease Proceed.');
  return true;
}
</script>
</head>

<body>
<center>
<?php include("header.php"); ?>	
     <p><font size="+2">Edit/Update Ipad</font></p>
    <br/>  
	<form name="form1" method="post" action="">
    <center>
		<table border="0" cellpadding="2" cellspacing="3" width="400">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?> readonly></td>
			</tr>
            <tr> 
				<td>Ipad no.</td>
				<td><input type="text" name="ipad_name" value=<?php echo $ipad_name;?> readonly></td>
			</tr>
            <tr> 
				<td>Date From</td>
				<td><input type="text" name="date_from" value=<?php echo $date_from;?> id="datepicker"></td>
			</tr>
			<tr> 
				<td>Time From</td>
				<td><input type="text" name="time_from" value=<?php echo $time_from;?> id="timepicker"></td>
			</tr>
			<tr>
            <tr> 
				<td>Date To</td>
				<td><input type="text" name="date_to" value=<?php echo $date_to;?> id="datepicker1"></td>
			</tr>
			<tr> 
				<td>Time To</td>
				<td><input type="text" name="time_to" value=<?php echo $time_to;?> id="timepicker1"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="loan_ipad_id" value=<?php echo $_GET['loan_ipad_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
        </center>
	</form>
  <?php include("footer.php"); ?>	
    </center>
</body>
</html>
