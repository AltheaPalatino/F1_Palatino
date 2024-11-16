<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Applicant</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Add New Applicant</h1>
    <form action="core/handleForms.php" method="POST">
        <p>
            <label for="first_name">First Name:</label> 
            <input type="text" name="first_name" required>
        </p>
        <p>
            <label for="last_name">Last Name:</label> 
            <input type="text" name="last_name" required>
        </p>
        <p>
            <label for="email">Email:</label> 
            <input type="email" name="email" required>
        </p>
        <p>
            <label for="gender">Gender:</label> 
            <input type="text" name="gender" required>
        </p>
        <p>
            <label for="address">Address:</label> 
            <input type="text" name="address" required>
        </p>
        <p>
            <label for="job_position">Job Position:</label> 
            <input type="text" name="job_position" required>
        </p>
        <p>
            <label for="application_status">Application Status:</label> 
            <select name="application_status" required>
                <option value="Pending">Pending</option>
                <option value="Reviewed">Reviewed</option>
                <option value="Accepted">Accepted</option>
                <option value="Rejected">Rejected</option>
            </select>
        </p>
        <p>
            <button type="submit" name="insertUserBtn">Add Applicant</button>
        </p>
    </form>
</body>
</html>
