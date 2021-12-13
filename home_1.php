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
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>Doctor's Home : E-Reseta</title>
	</head>
	
	<body>
		<h2>E-Reseta: Doctor's Page </h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<h3>Welcome to E-Reseta: Electronic Medical Prescription using NFC and RFID</h3>
		
		<h4> Welcome to our latest project, an Electronic Prescription Device for Contactless Transactions </h4>
		<p class="home-paragraph"> This is a collaborative project made by BS Electronics Engineering Students </br>
									of TUP Manila. It will help Doctors and Pharmacists to store medical information of </br>
									patients in a small NFC tag to reduce the use of paper based prescription and prevent </br>
									transmission of disease </p>

		<h4> Made Possible by : </h4>
		<p> Agosto, Charlz  </br>
			 Gubat IV, Carlos  </br>
			 Lagadon, Mary Kaye </br>
		 	Parra, Aira Joyce </br>
			Peralta, Mark Louie </p>

								 
		
		
		<img src="home ok ok.png" alt="" style="width:55%;">
	</body>
</html>