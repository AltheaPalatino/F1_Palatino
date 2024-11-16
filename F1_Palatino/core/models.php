
<?php

require_once 'dbConfig.php';

function checkIfUserExists($pdo, $username) {
    $response = array();
    $sql = "SELECT * FROM user_accounts WHERE username = ?";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$username])) {
        $userInfoArray = $stmt->fetch();

        if ($stmt->rowCount() > 0) {
            $response = array(
                "result"=> true,
                "status" => "200",
                "userInfoArray" => $userInfoArray
            );
        } else {
            $response = array(
                "result"=> false,
                "status" => "400",
                "message"=> "User doesn't exist from the database"
            );
        }
    }

    return $response;
}

function insertNewUser($pdo, $username, $first_name, $last_name, $password) {
    $response = array();
    $checkIfUserExists = checkIfUserExists($pdo, $username); 

    if (!$checkIfUserExists['result']) {
        $sql = "INSERT INTO user_accounts (username, first_name, last_name, password) 
        VALUES (?,?,?,?)";

        $stmt = $pdo->prepare($sql);

        if ($stmt->execute([$username, $first_name, $last_name, $password])) {
            $response = array(
                "status" => "200",
                "message" => "User successfully inserted!"
            );
        } else {
            $response = array(
                "status" => "400",
                "message" => "An error occurred with the query!"
            );
        }
    } else {
        $response = array(
            "status" => "400",
            "message" => "User already exists!"
        );
    }

    return $response;
}


function getAllApplicants($pdo) {
    $sql = "SELECT * FROM search_applicant ORDER BY first_name ASC";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
    return []; // Ensure a default return value
}

function getApplicantByID($pdo, $id) {
    $sql = "SELECT * FROM search_applicant WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$id]);
    if ($executeQuery) {
        return $stmt->fetch();
    }
    return null; // Return null if no result
}

function searchForApplicant($pdo, $searchQuery) {
    $sql = "SELECT * FROM search_applicant WHERE 
            CONCAT(first_name, ' ', last_name, email, gender, address, job_position, application_status) 
            LIKE ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute(["%" . $searchQuery . "%"]);
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
    return []; // Ensure a default return value
}

function insertNewApplicant($pdo, $first_name, $last_name, $email, $gender, $address, $job_position, $application_status) {
    $sql = "INSERT INTO search_applicant 
            (first_name, last_name, email, gender, address, job_position, application_status) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([
        $first_name, $last_name, $email, $gender, $address, $job_position, $application_status
    ]);
    return $executeQuery; // Return directly
}

function editApplicant($pdo, $first_name, $last_name, $email, $gender, $address, $job_position, $application_status, $id) {
    $sql = "UPDATE search_applicant
            SET first_name = ?, last_name = ?, email = ?, gender = ?, address = ?, 
                job_position = ?, application_status = ?
            WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([
        $first_name, $last_name, $email, $gender, $address, $job_position, $application_status, $id
    ]);
    return $executeQuery; // Return directly
}

function deleteApplicant($pdo, $id) {
    $sql = "DELETE FROM search_applicant WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$id]);
    return $executeQuery; // Return directly
}

?>
