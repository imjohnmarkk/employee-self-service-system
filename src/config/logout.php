<?php
session_start();

// Destroy the entire session
session_destroy();

// Redirect to the login page or any other page
header("Location: ../../index.php");
exit();
?>