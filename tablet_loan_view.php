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
function delete_confirm(){
	var result = confirm("Are you sure to delete users?");
	if(result){
		return true;
	}else{
		return false;
	}
}

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
     <p><font size="+2">View Ipad</font></p>
    <br/>  
<?php
include_once('connections/dbConfig.php');
$query = mysqli_query($conn,"SELECT * FROM loan_ipad_tbl WHERE staff_id=".$_SESSION['staff_id']." ORDER BY loan_ipad_id DESC");
?>
<form name="bulk_action_form" action="ipad_loan_delete.php" method="post" onSubmit="return delete_confirm();"/>

    <table border=0 cellpadding='4' cellspacing='5' width="90%">
     
    <tr bgcolor='#CCCCCC'>
            <td align="center"><input type="checkbox" name="select_all" id="select_all" value=""/> <font color="#FF0004">Return</font></td>        
            <td align="center">Staff Name</td>
            <td align="center">Ipad no.</td>
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
        <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['loan_ipad_id']; ?>"/></td>        
            <td align="center"><?php echo $row['name']; ?></td>
            <td align="center"><?php echo $row['ipad_name']; ?></td>
            <td align="center"><?php echo $row['date_from']; ?></td>
            <td align="center"><?php echo $row['time_from']; ?></td>
            <td align="center"><?php echo $row['date_to']; ?></td>
            <td align="center"><?php echo $row['time_to']; ?></td>
            <td align="center"><a href="ipad_loan_edit.php?loan_ipad_id=<?php echo $row['loan_ipad_id']; ?>">Edit</a></td>
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