<?php
require_once '../classes/dbh.class.php';

// Create an instance of the Dbh class
$dbh = new Dbh();

// Establish a database connection
$connection = $dbh->connect();

if (isset($_POST['submit'])) {
    $ID_number = $_POST['ID_number'];
    $status = $_POST['status'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $mid_name = $_POST['mid_name'];
    $sex = $_POST['sex'];
    $civil_status = $_POST['civil_status'];
    $birth_date = $_POST['birth_date'];
    $educ_attainment = $_POST['educ_attainment'];
    $contact_num = $_POST['contact_num'];
    $email_add = $_POST['email_add'];
    $residential_add = $_POST['residential_add'];
    $sss_id = $_POST['sss_id'];
    $gsis_id_num = $_POST['gsis_id_num'];
    $tin_num_id = $_POST['tin_num_id'];
    $phil_id = $_POST['phil_id'];
    $pag_ibig_id = $_POST['pag_ibig_id'];
    $license_num = $_POST['license_num'];
    $date_employed = $_POST['date_employed'];
    $date_ended = $_POST['date_ended'];
    $emergency_name = $_POST['emergency_name'];
    $emergency_contact_num = $_POST['emergency_contact_num'];
    $emergency_relationship = $_POST['emergency_relationship'];

    // Prepare and call the stored procedure
    $sql = "CALL InsertStaff(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);

    if ($stmt) {
        $stmt->bindParam(1, $ID_number, PDO::PARAM_STR);
        $stmt->bindParam(2, $status, PDO::PARAM_STR);
        $stmt->bindParam(3, $last_name, PDO::PARAM_STR);
        $stmt->bindParam(4, $first_name, PDO::PARAM_STR);
        $stmt->bindParam(5, $mid_name, PDO::PARAM_STR);
        $stmt->bindParam(6, $sex, PDO::PARAM_STR);
        $stmt->bindParam(7, $civil_status, PDO::PARAM_STR);
        $stmt->bindParam(8, $birth_date, PDO::PARAM_STR);
        $stmt->bindParam(9, $educ_attainment, PDO::PARAM_STR);
        $stmt->bindParam(10, $contact_num, PDO::PARAM_STR);
        $stmt->bindParam(11, $email_add, PDO::PARAM_STR);
        $stmt->bindParam(12, $residential_add, PDO::PARAM_STR);
        $stmt->bindParam(13, $sss_id, PDO::PARAM_STR);
        $stmt->bindParam(14, $gsis_id_num, PDO::PARAM_STR);
        $stmt->bindParam(15, $tin_num_id, PDO::PARAM_STR);
        $stmt->bindParam(16, $phil_id, PDO::PARAM_STR);
        $stmt->bindParam(17, $pag_ibig_id, PDO::PARAM_STR);
        $stmt->bindParam(18, $license_num, PDO::PARAM_STR);
        $stmt->bindParam(19, $date_employed, PDO::PARAM_STR);
        $stmt->bindParam(20, $date_ended, PDO::PARAM_STR);
        $stmt->bindParam(21, $emergency_name, PDO::PARAM_STR);
        $stmt->bindParam(22, $emergency_contact_num, PDO::PARAM_STR);
        $stmt->bindParam(23, $emergency_relationship, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "User added successfully.";
            header("location: ../legislative_staff_profile.php?result=success");
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