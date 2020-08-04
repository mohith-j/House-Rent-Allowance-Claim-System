<?php 
error_reporting(0);
$CPFNO = $_REQUEST['cpf_no'];
$OPT = $_REQUEST['opt'];

if (isset($_FILES['idproof'])) {
	$file=$_FILES['idproof'];
	
	//file properties
	$file_name=$file['name'];
	$file_tmp=$file['tmp_name'];
	$file_size=$file['size'];
	$file_error=$file['error'];


	//workout the file extension
	$file_ext=explode('.', $file_name);
	$file_ext=strtolower(end($file_ext));

	$allowed=array('pdf','jpg');
	$f=0;
	if(in_array($file_ext,$allowed)){
		if ($file_error ===0) {
			if ($file_size<=2097152) {
				$application_id=uniqid('',true);
				$file_name_new=$application_id.'.'.$file_ext;
				$file_destination='uploads/'.$file_name_new;
				if (move_uploaded_file($file_tmp, $file_destination)) {
					echo "file uploaded successfully";
					$f=1;
				}
			}
		}
	}
	if($f==0)
	{
		echo "file uploaded unsuccessfully";
	}
	

}

	$CPFNO=$_POST['cpf_no'];
	$tstamp= date('Y-m-d H:i:s');
	$name=$_POST['emp_name'];
	$OPT=$_POST['opt'];

	$CPFNO=stripcslashes($CPFNO);
	$tstamp=stripcslashes($tstamp);
	$name=stripcslashes($name);
	$OPT=stripcslashes($OPT);

	$conn=mysql_connect("localhost","root","");
	mysql_select_db("online hra claim system");
	// Check connection


	$result=mysql_query("INSERT INTO hra_claim_workflow (emp_id,emp_name,application_id,remarks,time_stamp,cur_user,current_status,proof_file_name)
	VALUES ('$CPFNO','$name','$application_id','__',sysdate(),'E','I','$file_name_new')")
	or die("Failed to query database:".mysql_error());

	
?>
<!DOCTYPE html>
		<html>
		<head>
			<title>OHRACS</title>
			<link rel="shortcut icon" type="image/x-icon" href="nlcil.png" />
		</head>
		<body>
			<br>
			<a href="screen1.php">Click here to go back to user page</a>
		</body>
		</html>		