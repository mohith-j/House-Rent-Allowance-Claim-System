<?php
    if (isset($_POST['accept'])) {
        $CPFNO=$_POST['cpf_no'];
		$time_stamp=$_POST['time'];
		$remarks=$_POST['remarks'];
		$CPFNO=stripcslashes($CPFNO);
		$time_stamp=stripcslashes($time_stamp);
		$remarks=stripcslashes($remarks);
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("online hra claim system");
		$result=mysql_query("update hra_claim_workflow set current_status='A',cur_user='T',remarks='$remarks' where emp_id='$CPFNO' and time_stamp='$time_stamp'")
			or die("Failed to query database:".mysql_error());
		$result1=mysql_query("select * from hra_claim_workflow where emp_id='$CPFNO' and remarks='$remarks'");
		$row=mysql_fetch_array($result1);
		// the message
		$msg = "Congratulations Mr./Ms. ".$row['emp_name']."\nYour hra request has been approved\n";
		
		
		// send email
		mail("the.harry.potter@yandex.com","HRA request Accepted",$msg);
		header("location:tascreen3.php");
    }
    elseif (isset($_POST['reject'])) {
        $CPFNO=$_POST['cpf_no'];
		$time_stamp=$_POST['time'];
		$remarks=$_POST['remarks'];
		
		$CPFNO=stripcslashes($CPFNO);
		$time_stamp=stripcslashes($time_stamp);
		$remarks=stripcslashes($remarks);

		$conn=mysql_connect("localhost","root","");
		mysql_select_db("online hra claim system");
		$result=mysql_query("update hra_claim_workflow set current_status='R',cur_user='T',remarks='$remarks' where emp_id='$CPFNO' and time_stamp='$time_stamp'")
			or die("Failed to query database:".mysql_error());
		
		$result1=mysql_query("select * from hra_claim_workflow where emp_id='$CPFNO' and remarks='$remarks'");
		$row=mysql_fetch_array($result1);
		// the message
		$msg = "Sorry ! Mr./Ms.".$row['emp_name']."\nYour hra request has been rejected\n Remarks:\n".$row['remarks'];

		

		// send email
		mail("the.harry.potter@yandex.com","HRA request Rejected",$msg);
		
		header("location:tascreen3.php");
    }
?>
