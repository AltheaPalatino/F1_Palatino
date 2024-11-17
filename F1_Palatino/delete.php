<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Applicant</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1 style="color: red;">Are you sure you want to delete this applicant?</h1>
	<?php 
		$applicant = getApplicantByID($pdo, $_GET['id']); 
		if (!$applicant) {
			echo "<h2>Applicant not found!</h2>";
			exit;
		}
	?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: auto; padding: 20px;">
		<h2>First Name: <?php echo htmlspecialchars($applicant['first_name']); ?></h2>
		<h2>Last Name: <?php echo htmlspecialchars($applicant['last_name']); ?></h2>
		<h2>Email: <?php echo htmlspecialchars($applicant['email']); ?></h2>
		<h2>Gender: <?php echo htmlspecialchars($applicant['gender']); ?></h2>
		<h2>Address: <?php echo htmlspecialchars($applicant['address']); ?></h2>
		<h2>Job Position: <?php echo htmlspecialchars($applicant['job_position']); ?></h2>
		<h2>Application Status: <?php echo htmlspecialchars($applicant['application_status']); ?></h2>
		<h2>Date Applied: <?php echo htmlspecialchars($applicant['date_applied']); ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php" method="POST"> 
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> 
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #F6D6D6; border-style: double; "> 
			</form>			
		</div>	
	</div>
</body>
</html>
