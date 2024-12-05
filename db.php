<?php
// Database connection variables
$servername = "localhost"; // Usually 'localhost' for local development
$username = "root";        // Default username for XAMPP
$password = "";            // Default password for XAMPP (usually empty)
$dbname = "ccit 06";        // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else "Connected successfully to the database.";
?>