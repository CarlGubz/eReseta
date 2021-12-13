<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
	
		
		
		<title>Registration : E-Reseta </title> 
	</head>
	
	<body>

		<h2 align="center">e-RESETA</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">Hospital Name</label>
						<div class="controls">
							<input id="div_refresh" name="Hospital Name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">DEA</label>
						<div class="controls">
							<input id="div_refresh" name="DEA" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Doctor's Name</label>
						<div class="controls">
							<input id="div_refresh" name="Dr Name" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Date</label>
						<div class="controls">
							<input name="date" type="text"  placeholder="Enter Date Today" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Patient's ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="Enter Patient's Name" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Age</label>
						<div class="controls">
							<input name="age" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Prescription</label>
						<div class="controls">
							<input name="Prescription" type="text" placeholder="Drug Code (dosage, qty)" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Existing Medical Condition</label>
						<div class="controls">
							<input name="medcon" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-success">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>