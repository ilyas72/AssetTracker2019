<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	echo '<script type="text/javascript"> alert("User Login Successfully...!");
		window.location.href = "login.php";</script>';
}
?>
<?php
//including the database connection file
   include('connections/dbloan.php');

if(isset($_POST['Submit'])) {	

	$name = $_POST['name'];
	$laptop_name = $_POST['laptop_name'];
	
	$date_from = $_POST['date_from'];
	$time_from = $_POST['time_from'];
	$date_to = $_POST['date_to'];
	$time_to = $_POST['time_to'];
	
	$staff_id = $_SESSION['staff_id'];
		
		
			if($laptop_name) {
		foreach ($laptop_name as $c) {
			mysqli_query($db, "INSERT INTO loan_laptop_tbl(laptop_name, staff_id, name, date_from, time_from, date_to, time_to) VALUES 
			('".mysqli_real_escape_string($db, $c)."', ".$staff_id." ,'$name','$date_from','$time_from','$date_to','$time_to')");
			  if(send)
		//display success message
		echo '<script type="text/javascript"> alert("Data added successfully!");
		window.location.href = "laptop_loan_view.php";</script>';
	}
}
}
?>
<?php
//including the database connection file
   include('connections/dbloan.php');

if(isset($_POST['Submit'])) {	

	$name = $_POST['name'];
	$laptop_name = $_POST['laptop_name'];
	
	$date_from = $_POST['date_from'];
	$time_from = $_POST['time_from'];
	$date_to = $_POST['date_to'];
	$time_to = $_POST['time_to'];
	
	$staff_id = $_SESSION['staff_id'];
		
		
			if($laptop_name) {
		foreach ($laptop_name as $c) {
			mysqli_query($db, "INSERT INTO record_laptop_tbl(laptop_name, staff_id, name, date_from, time_from, date_to, time_to) VALUES 
			('".mysqli_real_escape_string($db, $c)."', ".$staff_id." ,'$name','$date_from','$time_from','$date_to','$time_to')");
			  if(send)
		//display success message
		echo '<script type="text/javascript"> alert("Data added successfully!");
		window.location.href = "laptop_loan_view.php";</script>';
	}
 }
}
?>
<html>
<head>
	<title>Add Data</title>
     <link href="css/style.css" rel="stylesheet" type="text/css">
     <style type="text/css" media="screen">@import "css/layout.css";</style>  
 <link rel="stylesheet" href="css/jquery-ui.css">
 <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", "mm dd yy" );
    });
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker1" ).datepicker( "option", "dateFormat", "mm dd yy" );
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
        alert('laptop has been LOANs...! \nPlease choose another laptop.');
        return false;
      }
    }
  }
  alert('laptop Available! \nPlease Proceed.');
  return true;
}
</script>
</head>

<body>
<center>
<?php include("header.php"); ?>	
     <p><font size="+2">New Loan laptop</font></p>
    <br/>    
	<form action="" method="post" name="myform">
<table border="0" cellpadding="2" cellspacing="3" width="800">
    <tr>
		<td align="center"><div style='height:125px; width:755px; white-space: nowrap; overflow-x: visible; overflow-y: hidden;'><?php 
//db connection
include("connections/connection.php");
//query
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM loan_laptop_tbl");
	else
		 $sql_sel=mysql_query("SElECT * FROM loan_laptop_tbl");
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
   <input type="text" id="MyField" value="<?php echo $row['laptop_name'];?>" style="text-align:center; width:100px; height:40; background-color:#FF0004;"/>
    <?php	
    }
    ?></div></td>
      </tr>
      <tr> 
    <td align="center">&nbsp;</td></tr>
      <tr> 
    <td align="center">laptop has been Loan</td></tr>
     <tr> 
    <td align="center">&nbsp;</td></tr>
		</table>
        <hr>
   		<table border="0" cellpadding="2" cellspacing="3">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" readonly></td>
               </tr>
            <tr> 
				<td>laptop no.</td>
				<td><select name="laptop_name[]" id="MyField" multiple="multiple" onClick="return testDupes()" required='required'/>
                  <?php
			  //db connection
include("connections/connection.php");
//query
	          $query = "select * from  laptop_tbl";
               $results = mysql_query($query);
               while ($rows = mysql_fetch_assoc(@$results))
           {?>
        <option value="<?php echo $rows['laptop_name'];?>" ><?php echo $rows['laptop_name'];?></option>
    <?php
    }?></select>
     		</td>  </tr>
			<tr> 
				<td>Date From</td>
				<td><input type="text" id="datepicker" name="date_from" required></td>
			</tr>
            <tr> 
				<td>Time_From</td>
				<td><input type="text" id="timepicker" name="time_from" required></td>
			</tr>
            <tr> 
				<td>Date To</td>
				<td><input type="text" id="datepicker1" name="date_to" required></td>
			</tr>
            <tr> 
				<td>Time To</td>
				<td><input type="text" id="timepicker1" name="time_to" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" onClick="return testDupes()"></td>
			</tr>
		</table>
	</form>
<?php include("footer.php"); ?>	
    </center>
</body>
</html>
 