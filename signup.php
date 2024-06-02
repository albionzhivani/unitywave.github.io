<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "signup_user";
    $password = "password";
    $dbname = "unitywave_db"; // Replace 'your_database_name' with your actual database name
    $port = 3306; // Default MySQL port

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO users (name, surname, email, job, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $surname, $email, $job, $password);

    // Set parameters
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['signUpEmail'];
    $job = $_POST['job'];
    $password = password_hash($_POST['signUpPassword'], PASSWORD_DEFAULT); // Hash the password before storing it

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>