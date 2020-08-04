<!DOCTYPE html>
<html>
<head>
	<title>OHRACS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="sheet2.css">
	<link rel="shortcut icon" type="image/x-icon" href="nlcil.png" />

</head>
<body>
	<?php
		error_reporting(0);
		$CPFNO=$_POST['CPFNO'];
		
		$CPFNO=stripcslashes($CPFNO);
		$CPFNO=mysql_real_escape_string($CPFNO);
		
		mysql_connect("localhost","root","");
		mysql_select_db("online hra claim system");
		
		$result=mysql_query("select * from employee_master where emp_id=$CPFNO")
				or die("unauthorised access");
		$row=mysql_fetch_array($result);
		if($CPFNO==$row['emp_id']){
		
		}
		else
		{
			header("location:incorrect.php");
		}
	?>
	<div class="container content" >
		<div class="col-lg-2">
			<div class="thumbnail">
				<img src="https://static.thenounproject.com/png/164048-200.png">
			</div>
		</div>
		<div class="col-lg-8">
			<h1> Online HRA claim system (OHRACS) </h1>
		</div>
		<div class="col-lg-2">
			<div class="thumbnail">
				<img src="https://www.nlcindia.com/new_website/PICS/nlcil_logo_new.png" length="200" width="200">
			</div>
		</div>
	</div>
	<div class="container" id="id1" >
		<div class="col-lg-12">
			<h2> HRA claim Option </h2>
		</div>
	</div>
	
	
	<div class="container borders">
		<div class="col-lg-2 class2">
			<p>CPF.No</p>
		</div>
		<div class="col-lg-4 pad">
			
		<?php
		$CPFNO=$_POST['CPFNO'];
		
		$CPFNO=stripcslashes($CPFNO);
		$CPFNO=mysql_real_escape_string($CPFNO);

		mysql_connect("localhost","root","");
		mysql_select_db("online hra claim system");

		$result=mysql_query("select * from employee_master where emp_id=$CPFNO")
				or die("Failed to query database:".mysql_error());
		$row=mysql_fetch_array($result);
		echo $row['emp_id'];
		?>
		
		</div>
		<div class="col-lg-2 class2">
			<p>Name</p>
		</div>
		<div class="col-lg-4 pad">
			<?php echo $row['emp_name']; ?>
		</div>
	</div>
	
	<div class="container borders">
		<div class="col-lg-4 class2">
			<p>Designation</p>
		</div>
		<div class="col-lg-8 pad">
			<?php echo $row['emp_designation']; ?>
		</div>
	</div>
	
	<div class="container borders">
		<div class="col-lg-4 class2">
			<p>Present Address</p>
		</div>
		<div class="col-lg-8 pad">
			<?php echo $row['emp_present_address']; ?>
		</div>
		
	</div>
	<div class="container borders">
		<div class="col-lg-4 class2">
			<p>Permanant Address</p>
		</div>
		<div class="col-lg-8 pad">
			<?php echo $row['emp_permanent_address']; ?>
		</div>
		
	</div>
	<form action="screen3.php" method="post" enctype="multipart/form-data" name="hraopt" id="hraopt">
		<div class="container content">
			<div class="col-lg-4 class2">
				<p>Choose Option*</p>
			</div>
			<div class="col-lg-6 pad" id="id2">
				<input type="radio" name="opt" id="opt" value="Y">  Opt HRA Claim<br>
			</div>
		</div>
		
		
		<div class="container content">
			<div class="col-lg-4 class2">
				<p>Proof for Address*</p>
			</div>
			<div class="col-lg-8 pad">
				
				<input type="file" name="idproof" id="idproof" required>
			</div>
		</div>
		
		<div class="container content">
			<div class="col-lg-5">
			</div>
			<div class="col-lg-2">
				<input type="hidden" name="cpf_no" id="cpf_no" value="<?php echo $row['emp_id'] ?>">
				<input type="hidden" name="emp_name" id="emp_name" value="<?php echo $row['emp_name'] ?>">


				<input type="submit" class="button"value="SUBMIT" name="upload" onclick="if(!this.form.opt.checked){alert('You must Opt HRA Claim to continue');return false}">
			</div>
			<div class="col-lg-5">
			</div>
		</div>
	</form>
</body>
</html>