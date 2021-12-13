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
		
		
		<title>User Data : E-Reseta </title>
	</head>
	
	<body>
		<h2>e-RESETA</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3 id ="userdatatable">INFORMATION</h3>
            </div>
            <div class="row">
                <table id="reg" class="table table-bordered">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
					  <th>Hospital Name</th>
					  <th>DEA</th>
					  <th>Doctor's Name</th>
					  <th>Date</th>
                      <th>Patient's ID</th>
					  <th>Name</th>
					  <th>Gender</th>
					  <th>Age</th>
                      <th>Prescription</th>
					  <th>Existing Medical Condition</th>
					  <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM table_the_iot_projects ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
							echo '<td>'. $row['hospitals_name'].'</td>'; 
							echo '<td>'. $row['dea'].'</td>';
							echo '<td>'. $row['doctors_name'].'</td>';
							echo '<td>'. $row['date'].'</td>';
							echo '<td>'. $row['id'].'</td>';
							echo '<td>'. $row['name'].'</td>';
							echo '<td>'. $row['gender'].'</td>';
							echo '<td>'. $row['age'].'</td>';
							echo '<td>'. $row['prescription'].'</td>';
							echo '<td>'. $row['existing_medical_condition'].'</td>';
					

							echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>