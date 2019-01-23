<?php session_start(); ?>
<?php
if(!isset($_SESSION['valid'])) {
echo '<script type="text/javascript"> alert("User Login Successfully...!");
		window.location.href = "login.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete multiple rows in PHP by CodexWorld</title>
<link rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
function validate(f){
f = f.elements;
for (var c = 0, i = f.length - 1; i > -1; --i)
if (f[i].name && /^checked_id\[\]$/.test(f[i].name) && f[i].checked) ++c;
if (c < 1) alert('Please select at least one item to return.');
return c > 0;
};

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
	$('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#select_all').prop('checked',true);
		}else{
			$('#select_all').prop('checked',false);
		}
	});
});
</script>
</head>

<body>
<center>
<?php include("header.php"); ?>	
<table border="0" cellpadding="2" cellspacing="3" width="800">
<tr> 
    <td align="center"><h3><u>Laptop on loan</u></h3><br></td></tr>
     <tr> 
    <tr>
		<td align="center"><div style='height:230px; width:780px; white-space: nowrap; overflow-x: visible; overflow-y: hidden;'><?php 
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
  <input type="text" value="<?php echo $row['laptop_name']; echo $row['/n/name'];?>" style="text-align:center; width:140px; height:240; background-color:#FF0004;"/>
    <?php	
    }
    ?></div></td>
      </tr>
      
    <td align="center">&nbsp;</td></tr>
		</table>
     <p><font size="+2">View laptop</font></p>
    <br/>  
<?php
include_once('connections/dbConfig.php');
$query = mysqli_query($conn,"SELECT * FROM loan_laptop_tbl WHERE staff_id=".$_SESSION['staff_id']." ORDER BY loan_laptop_id DESC");
?>
<form name="bulk_action_form" action="laptop_loan_delete.php" method="post" onsubmit="return validate(this)"/>

    <table border=0 cellpadding='4' cellspacing='5' width="90%">
     
    <tr bgcolor='#CCCCCC'>
            <td align="center"><input type="checkbox" name="select_all" id="select_all" value=""/>  <font color="#FF0004">Return</font></td>        
            <td align="center">Staff Name</td>
            <td align="center">laptop no.</td>
            <td align="center">Date From</td>
            <td align="center">Time From</td>
            <td align="center">Date To</td>
            <td align="center">Time To</td>
            <td align="center">Edit/Update</td>
        </tr></table>
        <div style='height:250px; overflow-y:scroll; width:1010px;'>
         <table border=0 cellpadding='4' cellspacing='5' width="90%">
         
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
        <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['loan_laptop_id']; ?>"/></td>        
            <td align="center"><?php echo $row['name']; ?></td>
            <td align="center"><?php echo $row['laptop_name']; ?></td>
            <td align="center"><?php echo $row['date_from']; ?></td>
            <td align="center"><?php echo $row['time_from']; ?></td>
            <td align="center"><?php echo $row['date_to']; ?></td>
            <td align="center"><?php echo $row['time_to']; ?></td>
            <td align="center"><a href="laptop_loan_edit.php?loan_laptop_id=<?php echo $row['loan_laptop_id']; ?>">Edit</a></td>
        </tr>
        <?php } }else{ ?>
      
           <tr><td colspan="5">No records found.</td>
        <?php } ?></tr>
        
           </table></div>
           <table border=0 cellpadding='4' cellspacing='5' width="90%">
           <tr><td bgcolor='#CCCCCC' colspan="8" >&nbsp;</td></tr>
           <tr>
         <td align="center" colspan="8"><br><input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Return"/></td>
    </table>
<?php include("footer.php"); ?>	
</form>
    </center>
</body>
</html> 