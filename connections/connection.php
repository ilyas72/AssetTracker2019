<?php

// mysql_connect("database-host", "username", "password")
$conn = @mysql_connect("localhost","Designer","design") 
			or die("cannot connect");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("system_loan",$conn);
	
?>
