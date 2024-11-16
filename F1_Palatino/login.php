<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.2em;
            padding: 10px;
            width: 300px;
            margin: 10px 0;
        }
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <?php  
    if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
        if ($_SESSION['status'] == "200") {
            echo "<h1 style='color: green;'>{$_SESSION['message']}</h1>";
        } else {
            echo "<h1 style='color: red;'>{$_SESSION['message']}</h1>";    
        }
        unset($_SESSION['message']);
        unset($_SESSION['status']);
    }
    ?>

    <h1>Login as User</h1>
    <form action="core/handleForms.php" method="POST">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </p>
        <p>
            <input type="submit" name="loginUserBtn" value="Login">
        </p>
    </form>
    <p>Don't have an account? You may register <a href="register.php">here</a>.</p>
</body>
</html>
