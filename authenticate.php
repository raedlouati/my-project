<?php
session_start();

// For demo purposes, we're using hardcoded credentials
// In a real application, you would validate against a database
$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Simple validation
        if ($username === $valid_username && $password === $valid_password) {
            // Authentication successful
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            
            header("location: index.php");
            exit;
        } else {
            // Authentication failed
            header("location: login.php?error=1");
            exit;
        }
    }
}

// If the code reaches here, redirect to login page
header("location: login.php");
exit;
?>