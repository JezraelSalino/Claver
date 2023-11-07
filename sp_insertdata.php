<?php
require_once 'classes/dbh.class.php';

// Create an instance of the Dbh class
$dbh = new Dbh();

// Establish a database connection
$connection = $dbh->connect();

if (isset($_POST['save_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $sql = "CALL InsertUser(?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);

    if ($stmt) {
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->bindParam(3, $gender, PDO::PARAM_STR);
        $stmt->bindParam(4, $email, PDO::PARAM_STR);

        if ($stmt->execute()) {

            $res = [
                'status' => 200,
                'message' => 'User added'
            ];
            echo json_encode($res);
            return false;

        } else {
            echo "Error adding user: " . $stmt->errorInfo()[2];
        }

        $stmt->closeCursor();
    } else {
        echo "Error preparing statement: " . $connection->errorInfo()[2];
    }

} else {
    echo "Incomplete data.";
}

// Close the database connection when you're done
$connection = null;