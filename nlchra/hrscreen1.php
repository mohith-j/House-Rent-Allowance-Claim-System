<!DOCTYPE html>
<html>
<head>
	<title>OHRACS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheethrscreen1.css">
	<link rel="shortcut icon" type="image/x-icon" href="nlcil.png" />

</head>
</head>
<body>
	
	

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
	<br>
	<div class="container borders">
		<ul>
				<li class="col-lg-3"><a href="screen1.php" id="user">User</a></li>
  				<li class="col-lg-3"><a class="active" href="hrscreen1.php" id="HR">Human Resource Department</a></li>
  				<li class="col-lg-3"><a href="tascreen1.php">TA Department</a></li>
  				<li class="col-lg-3"><a href="irdepartment1.php">IR Department</a></li>
  			 			
		</ul>
	</div>
	<br>
	<br>
	<form action="hrscreen2.php" method="post">
		<div class="container borders">
			<div class="col-lg-2 class2">
				<p>CPF.No</p>
			</div>
			<div class="col-lg-4 pad">
				<input type="text" size="50" name="CPFNO" id="CPFNO" required>
			</div>
		</div>
		<div class="container borders">
			<div class="col-lg-2 class2">
				<p>Password</p>
			</div>
			<div class="col-lg-4 pad">
				<input type="Password" size="50" name="Password" id="Password" required>
			</div>
		</div>
			<div class="container ">
			<div class="col-lg-5">
			</div>
			<div class="col-lg-2">
				<input class="button button-md" type="submit" value="SUBMIT" name="submit"> 
			</div>
			<div class="col-lg-5">
			</div>
		</div>
	</form>
</body>
</html>