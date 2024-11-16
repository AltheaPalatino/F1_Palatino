<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Applicant Search</title>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<!-- Custom CSS Styles -->
	<style>
		body {
			font-family: Times New Roman, sans-serif;
			background-color: #f4f4f9;
			margin: 0;
			padding: 0;
		}

		h1, h2 {
			text-align: center;
			color: #333;
		}

		form {
			text-align: center;
			margin: 20px 0;
		}

		input[type="text"] {
			padding: 10px;
			width: 80%;
			max-width: 300px;
			margin: 10px 0;
			border: 5px double #ccc;
			border-radius: 5px;
		}

		input[type="submit"] {
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

		table {
			width: 100%;
			margin-top: 20px;
			border-collapse: collapse;
			text-align: left;
		}

		th, td {
			padding: 12px;
			border: 3px double; #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #ddd;
		}

		a {
			color: #007BFF;
			text-decoration: none;
			padding: 10x 5px;
			border: 3px groove lightgray;
			border-radius: 2px;
			margin-right: 10px;
		}

		a:hover {
			background-color: #007BFF;
			color: white;
		}

		p {
			text-align: center;
		}
	</style>
</head>
<body>

	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: green; background-color: ghostwhite; border-style: solid;">	
			<?php echo $_SESSION['message']; ?>
		</h1>
	<?php } unset($_SESSION['message']); ?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
		<p><a href="login.php">LOGOUT</a></p>
		<input type="text" name="searchInput" placeholder="Search here">
		<input type="submit" name="searchBtn">
	</form>

	<p><a href="index.php">Clear Search Query</a></p>
	<p><a href="insert.php">Insert New Applicant</a></p>

	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Job Position</th>
			<th>Application Status</th>
			<th>Date Applied</th>
			<th>Action</th>
		</tr>

		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllApplicants = getAllApplicants($pdo); ?>
			<?php foreach ($getAllApplicants as $row) { ?>
				<tr>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['job_position']; ?></td>
					<td><?php echo $row['application_status']; ?></td>
					<td><?php echo $row['date_applied']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		<?php } else { ?>
			<?php $searchForApplicant = searchForApplicant($pdo, $_GET['searchInput']); ?>
			<?php foreach ($searchForApplicant as $row) { ?>
				<tr>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['job_position']; ?></td>
					<td><?php echo $row['application_status']; ?></td>
					<td><?php echo $row['date_applied']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		<?php } ?>
	</table>
</body>
</html>
