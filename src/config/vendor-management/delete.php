<?php
session_start();
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted vendor ID and form data
    $vendorID = $_POST['vendorID'];

    require_once("../connections.php");

    $sql = "DELETE FROM vendors WHERE id=$vendorID";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['delete-success'] = "Vendor delete successfully.";
        header('Location: ../../admin-pages/vendor-management.php');
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
