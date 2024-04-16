<?php
session_start();

// Check if the user is logged in and has the appropriate role
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "user") {
    // Redirect to login page or display an error message
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />
    <title>User Dashboard</title>
</head>

<body>