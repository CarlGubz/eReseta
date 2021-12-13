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
		
		
		<title>Home : E-Reseta</title>
	</head>
	
	<body>
		<h2>e-RESETA  </h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<h3>Welcome to e-Reseta:  </br>
			Electronic Medical Prescription using NFC and RFID

		</h3>
		<hr> 
		<h4 id ="futures"> Future of Medical Prescriptions for Contactless Transactions </h4>
		<p class="home-paragraph"> This is a collaborative project made by BS Electronics Engineering Students </br>
									of TUP Manila. It will help Doctors and Pharmacists to store medical information of </br>
									patients in a small NFC tag to reduce the use of paper based prescription and prevent </br>
									transmission of diseases. </p>
		
	<div class="row">
  	<div class="column">
    <img src="img/doctor.jpg">
  	</div>
  	<div class="column">
    <img src="img/pharm.jpg">
  	</div>
  	<div class="column">
    <img src="img/student.jpg">
  	</div>
	</div>

		
		<p id ="footer">
			
			AGOSTO | GUBAT | LAGADON | PARRA | PERALTA  </br>

			</p>
								 
		
		
		
	</body>
</html>