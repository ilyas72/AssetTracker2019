<?php
session_start();
include_once('connections/dbConfig.php');
if(isset($_POST['bulk_delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $loan_netbook_id){
        mysqli_query($conn,"DELETE FROM loan_netbook_tbl WHERE loan_netbook_id=".$loan_netbook_id);
    }
    $_SESSION['success_msg'] = 'Users have been deleted successfully.';
   
    echo '<script type="text/javascript"> alert("Data added successfully!");
		window.location.href = "netbook_loan_view.php";</script>';
}
?>