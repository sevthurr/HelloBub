<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Store the requested URL if it's not the login page
    if (basename($_SERVER['PHP_SELF']) !== 'login.php') {
        $_SESSION['redirect_url'] = $_SERVER['PHP_SELF'];
    }
    
    // Redirect to login page
    header("Location: login.php");
    exit();
}
?> 