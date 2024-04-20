<?php
    // Establish connection to MySQL database
    include 'connection.php';

    // Retrieve form data using $_POST superglobal
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate input data
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $province = mysqli_real_escape_string($conn, $_POST['province']);
        $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
        $monthly_income = mysqli_real_escape_string($conn, $_POST['monthly_income']);
        $relationship_to_resident = mysqli_real_escape_string($conn, $_POST['relationship']);
        $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
        $allergies_conditions = mysqli_real_escape_string($conn, $_POST['allergies_conditions']);
        $education = mysqli_real_escape_string($conn, $_POST['education']);

        // Prepare SQL INSERT statement
        $sql = "INSERT INTO important_info (address, barangay, city, province, occupation, monthly_income, relationship_to_resident, contact_number, allergies_conditions, education) 
                VALUES ('$address', '$barangay', '$city', '$province', '$occupation', '$monthly_income', '$relationship_to_resident', '$contact_number', '$allergies_conditions', '$education')";

        // Execute SQL INSERT statement
        if ($conn->query($sql) === TRUE) {
            // Insertion successful, redirect to another page
            header("Location: Proof of Identity.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close database connection
    $conn->close();
?>
