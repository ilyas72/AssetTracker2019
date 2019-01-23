<?php
	session_start();
	require("conection/connect.php");
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['f_nametxt'];
		$pwd=$_POST['f_pwdtxt'];
		$sql=mysql_query("SELECT * FROM stu_tbl WHERE f_username='$uname' AND f_password='$pwd'");
		$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
					if($row['type']=='admin')
						$msg='<script type="text/javascript"> alert("Login failed \nPlease enter your username & password !")</script>';	
					else
						header("location: main_staff.php");
			}
			else
					$msg='<script type="text/javascript"> alert("Login failed \nPlease enter your username & password !")</script>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::.Irsyad Zuhri - Loans System.::</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
	<form method="post">
                  	<div id="login_back">
        			<div id="msg"></div>
                    <div id="login_form">
                         <div style="color:#fff;" align="center"><h2>Irsyad Zuhri - Loan System ver 0.1</h2><br /><br /></div>
                    	<label for="login">Username:</label>
                    	<input type="text" class="fields" name="f_nametxt" title="Enter username here"  />
                        <div class="clear"></div>
                        <label for="login">Password:</label>
                        <input type="password" class="fields" name="f_pwdtxt"  title="Enter Password here"  autocomplete="off"/>
                        <div class="clear"></div>
                        <div id="space_div"></div>
                        <input type="submit" class="button" name="btn_log" value="Log in" />
                    </div>
        		</div>
    </form>
	<h2 style="color:#00F;" align="center">
	<?php echo $msg; ?>
	</h2>
    <div style="color:#fff;" align="center">Copyright Irsyad Zuhri 2016 - School Loans System</div>
</body>
</html>