<?php
session_start();
session_destroy();
 echo '<script type="text/javascript"> alert("User has been log-out!");
	window.location.href = "index.php";</script>';	
?>
