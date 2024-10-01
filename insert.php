<?php
// Database connection details
$servername = "localhost"; // Usually localhost for XAMPP
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default password for root is empty
$dbname = "mylms2"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$age = $_POST['age'];

// Insert data into the table
$sql = "INSERT INTO students (firstname, lastname, username, age) VALUES ('$firstname', '$lastname', '$username', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>