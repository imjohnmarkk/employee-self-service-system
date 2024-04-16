<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "employees_self_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
