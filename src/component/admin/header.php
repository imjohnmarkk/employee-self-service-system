<?php
session_start();

// Check if the user is logged in and has the appropriate role
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "admin") {
    // Redirect to login page or display an error message
    header("Location: ../../index.php");
    exit();
}
?>

<?php require_once("../config/connections.php") ?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../styles.css" /> -->
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Admin Dashboard</title>
</head>

<body>