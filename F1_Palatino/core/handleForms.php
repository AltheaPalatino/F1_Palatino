
<?php  

require_once 'dbConfig.php';
require_once 'models.php';


if (isset($_POST['registerUserBtn'])) {
    $username = trim($_POST['username']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (!empty($username) && !empty($first_name) && !empty($last_name) && 
        !empty($password) && !empty($confirm_password)) {

        if ($password == $confirm_password) {
            $insertQuery = insertNewUser($pdo, $username, $first_name, $last_name, 
                password_hash($password, PASSWORD_DEFAULT));

            if ($insertQuery['status'] == '200') {
                $_SESSION['message'] = $insertQuery['message'];
                $_SESSION['status'] = $insertQuery['status'];
                header("Location: ../login.php");
            } else {
                $_SESSION['message'] = $insertQuery['message'];
                $_SESSION['status'] = $insertQuery['status'];
                header("Location: ../register.php");
            }
        } else {
            $_SESSION['message'] = "Please make sure both passwords are equal";
            $_SESSION['status'] = "400";
            header("Location: ../register.php");
        }
    } else {
        $_SESSION['message'] = "Please make sure there are no empty input fields";
        $_SESSION['status'] = "400";
        header("Location: ../register.php");
    }
}

if (isset($_POST['loginUserBtn'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $loginQuery = checkIfUserExists($pdo, $username);

        if ($loginQuery['status'] == '200') {
            $usernameFromDB = $loginQuery['userInfoArray']['username'];
            $passwordFromDB = $loginQuery['userInfoArray']['password'];

            if (password_verify($password, $passwordFromDB)) {
                $_SESSION['username'] = $usernameFromDB;
                header("Location: ../index.php");
            } else {
                $_SESSION['message'] = "Incorrect password!";
                $_SESSION['status'] = "400";
                header("Location: ../login.php");
            }
        } else {
            $_SESSION['message'] = $loginQuery['message'];
            $_SESSION['status'] = $loginQuery['status'];
            header("Location: ../login.php");
        }
    } else {
        $_SESSION['message'] = "Please make sure no input fields are empty";
        $_SESSION['status'] = "400";
        header("Location: ../login.php");
    }
}

if (isset($_GET['logoutUserBtn'])) {
    unset($_SESSION['username']);
    header("Location: ../login.php");
}



if (isset($_POST['insertUserBtn'])) {
    $insertUser = insertNewApplicant(
        $pdo, 
        $_POST['first_name'], 
        $_POST['last_name'], 
        $_POST['email'], 
        $_POST['gender'], 
        $_POST['address'], 
        $_POST['job_position'], 
        $_POST['application_status']
    );

    if ($insertUser) {
        $_SESSION['message'] = "Successfully inserted!";
        header("Location: ../index.php");
        exit;
    }
}

if (isset($_POST['editUserBtn'])) { // Corrected to match form button
    $editUser = editApplicant(
        $pdo, 
        $_POST['first_name'], 
        $_POST['last_name'], 
        $_POST['email'], 
        $_POST['gender'], 
        $_POST['address'], 
        $_POST['job_position'], 
        $_POST['application_status'], 
        $_POST['id'] // Changed from $_GET to $_POST
    );

    if ($editUser) {
        $_SESSION['message'] = "Successfully edited!";
        header("Location: ../index.php");
        exit;
    }
}

if (isset($_POST['deleteUserBtn'])) { // Corrected to match form button
    $deleteUser = deleteApplicant($pdo, $_POST['id']); // Changed from $_GET to $_POST

    if ($deleteUser) {
        $_SESSION['message'] = "Successfully deleted!";
        header("Location: ../index.php");
        exit;
    }
}

if (isset($_GET['searchBtn'])) {
    $searchForAUser = searchForApplicant($pdo, $_GET['searchInput']);
    foreach ($searchForAUser as $row) {
        echo "<tr> 
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['address']}</td>
                <td>{$row['job_position']}</td>
                <td>{$row['application_status']}</td>
              </tr>";
    }
}
?>
