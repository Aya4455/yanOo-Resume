<?php
// Database connection details
$servername = "localhost"; // Change if not using localhost
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "portfolio"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Prepare the SQL query to insert data into the messages table
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the query and check if the record was inserted successfully
    if ($conn->query($sql) === TRUE) {
        echo "<div class='container mt-5'><div class='alert alert-success'>Message sent successfully!</div></div>";
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Error: " . $conn->error . "</div></div>";
    }

    // Close the connection
    $conn->close();
}
?>

