<?php
// Replace with your database credentials
$host = 'localhost';
$username = 'tigro';
$password = '12345';
$database = 'database';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
