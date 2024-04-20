<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Database connection
        include 'connection.php';

        // Sanitize user input to prevent SQL injection
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Prepare SQL statement to retrieve the user with the provided username and password
        $sql = "SELECT * FROM users WHERE userName='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            // Redirect to ad_im.php
            header("Location: Admin.php");
            exit(); // Ensure that script execution stops after redirection
        } else {
            // Login failed
            echo "Invalid username or password";
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Username and password are required";
    }
} else {
    echo "Invalid request";
}
?>