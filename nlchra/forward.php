<?php
	$CPFNO=$_POST['cpf_no'];
	$time_stamp=$_POST['time'];
	$CPFNO=stripcslashes($CPFNO);
	$time_stamp=stripcslashes($time_stamp);

	$conn=mysql_connect("localhost","root","");
	mysql_select_db("online hra claim system");
	$result=mysql_query("update hra_claim_workflow set current_status='F',cur_user='H' where emp_id='$CPFNO' and time_stamp='$time_stamp'")
	or die("Failed to query database:".mysql_error());
	header("location:hrscreen3.php");

?>