<?php
session_start();
include_once('connections/dbConfig.php');
if(isset($_POST['bulk_delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $loan_ipad_id){
        mysqli_query($conn,"DELETE FROM loan_ipad_tbl WHERE loan_ipad_id=".$loan_ipad_id);
    }
    $_SESSION['success_msg'] = 'Users have been deleted successfully.';
   
    echo '<script type="text/javascript"> alert("Data added successfully!");
		window.location.href = "ipad_loan_view.php";</script>';
}
?>