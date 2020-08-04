<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>OHRACS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheethrscreen3.css">
	<link rel="shortcut icon" type="image/x-icon" href="nlcil.png" />

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
	<p>Welcome HR ! !</p>
	<br>
	<br>
	<div class="container">
		<ul>
			<li width="35%"></li>
			<li width="10%"><a class="active" href="hrscreen3.php">User Requests</a></li>
			<li width="10%"><a href="hrscreenaccept.php">TA Approved</a></li>
			<li width="10%"><a href="hrscreenreject.php">TA Rejected</a></li>
			
		</ul>
		
	</div>
	<br>
	<br>
	<table class="container centre">
		<thead>
			<tr>
				<td class="col-lg-3 class2"><p>CPF.NO</p></td>
				<td class="col-lg-3 class2"><p>Employee Name</p></td>
				<td class="col-lg-3 class2"><p>Proof of Address</p></td>
				<td class="col-lg-3 class2"><p>Action</p></td>
			</tr>
		</thead>
		<?php

		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "online hra claim system");
		 
		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 
		// Attempt select query execution
		$sql = "select * from hra_claim_workflow where current_status='I' and cur_user='E' order by time_stamp";
		if($result = mysqli_query($link, $sql)){
		    if(mysqli_num_rows($result) > 0){
		        echo "<tbody>";
		        while($row = mysqli_fetch_array($result)){
		            echo "<tr>";
		            echo "<form action='forward.php' method='post'>";
		                echo "<td>" . $row['emp_id'] . "</td>";
		                echo "<td>" . $row['emp_name'] . "</td>";
		                echo "<td>" .'<a href="uploads/'.$row['proof_file_name'].'" target="_blank">Click here to view the proof</a>' . "</td>";
		                echo "<td>" .'<input type="hidden" name="cpf_no" id="cpf_no" value="'.$row['emp_id'].'"><input type="hidden" name="time" id="time" value="'.$row['time_stamp'].'"><input type="submit" value="FORWARD" name="upload">'."</td>";
		            echo "</form>";
		            echo "</tr>";
		        }
		        echo "</tbody>";
		        // Free result set
		        mysqli_free_result($result);
		    } else{
		        echo "No records matching your query were found.";
		    }
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		 
		// Close connection
		mysqli_close($link);
		?>

		
	</table>
</body>
</html>











 -->