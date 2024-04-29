<?php
// Include database connection file
require_once("./connections.php");

// Check if employee ID is provided and valid
if (isset($_POST['employeeID']) && !empty($_POST['employeeID'])) {
    // Get employee ID from POST data and sanitize it
    $employeeID = $conn->real_escape_string($_POST['employeeID']);

    // Prepare SQL statement to delete employee from database
    $sql = "DELETE FROM Employees WHERE EmployeeID = ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("i", $employeeID);

        // Execute the statement
        if ($stmt->execute()) {
            // If deletion is successful, redirect back to the page where the delete action was initiated
            header("Location: http://localhost/employee-self-service-system/src/admin-pages/employee-management.php");
            exit();
        } else {
            // If deletion fails, display error message
            echo "Error deleting record: " . $stmt->error;
        }
    } else {
        // If statement preparation fails, display error message
        echo "Error: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // If employee ID is not provided or empty, redirect back to the page where the delete action was initiated
    header("Location: http://localhost/employee-self-service-system/src/admin-pages/employee-management.php");
    exit();
}

// Close database connection
$conn->close();
