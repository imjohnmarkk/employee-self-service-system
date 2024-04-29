<?php
session_start();

// Include the database connection file
include("connections.php");

// Get the input values
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['user_pass'] = $password;
$loginSuccess = 'Login Successfully';
// Query the database for the user
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {

        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        // Check user role
        $role = $row['role'];
        $_SESSION['role'] = $role;

        if ($role == "user") {
            // Redirect to user dashboard
            $_SESSION['login_success'] = "Login Successfully";
            header("Location: ../dashboard/user-dashboard.php");
            exit();
        } elseif ($role == "admin") {
            // Redirect to admin dashboard
            $_SESSION['login_success'] = "Login Successfully";
            header("Location: ../dashboard/admin-dashboard.php");
            exit();
        } else {
            // Invalid role, redirect to login page with error message
            $_SESSION["role_error"] = "Invalid Role";
            header("Location: ../../index.php");
            exit();
        }
    } else {
        // Password incorrect, redirect to login page with error message
        $_SESSION["pass_error"] = "Invalid Password";
        header("Location: ../../index.php");
        exit();
    }
} else {
    // User not found, redirect to login page with error message
    $_SESSION["user_error"] = "Invalid Username";
    header("Location: ../../index.php");
    exit();
}
