<?php
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL is blank
$database = "valentine"; // Change this to the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
