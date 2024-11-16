<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Applicant</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php 
		$getApplicantByID = getApplicantByID($pdo, $_GET['id']); 
	?>
	<h1>Edit Applicant Information</h1>
	<form action="core/handleForms.php" method="POST"> <!-- Removed id from URL -->
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <!-- Added hidden input -->
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getApplicantByID['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getApplicantByID['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" value="<?php echo $getApplicantByID['email']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>">
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address" value="<?php echo $getApplicantByID['address']; ?>">
		</p>
		<p>
			<label for="job_position">Job Position</label> 
			<input type="text" name="job_position" value="<?php echo $getApplicantByID['job_position']; ?>">
		</p>
		<p>
			<label for="application_status">Application Status</label> 
			<input type="text" name="application_status" value="<?php echo $getApplicantByID['application_status']; ?>">
		</p>
		<p>
			<input type="submit" value="Save" name="editUserBtn"> <!-- Corrected name -->
		</p>
	</form>
</body>
</html>
