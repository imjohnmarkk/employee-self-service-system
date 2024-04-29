<?php
session_start();
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted vendor ID and form data
    $vendorID = $_POST['vendorID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $products = $_POST['products'];

    require_once("../connections.php");

    $sql = "UPDATE vendors SET name='$name', email='$email', products='$products' WHERE id=$vendorID";
    $query = "SELECT * FROM vendors WHERE id=$vendorID";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $vendor = $result->fetch_assoc();
        $vendorName = $vendor['name'];

        if ($conn->query($sql) === TRUE) {
            $_SESSION['update-success'] = "$vendorName update successfully.";
            header('Location: ../../admin-pages/vendor-management.php');
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Isara ang koneksyon sa database
    $conn->close();
}
