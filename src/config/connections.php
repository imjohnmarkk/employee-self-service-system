<?php
// Database connection parameters
$servername = "localhost"; //change the servername to localhost:3307 if using the window os
$username = "root";
$password = "";
$database = "vendor_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
