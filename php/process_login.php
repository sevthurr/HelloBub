<?php
session_start();
require_once 'config.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Log the received data
    error_log("Login attempt - Username: " . $_POST['username']);
    
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Username and password are required']);
        exit();
    }

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Log the database result
        error_log("Database query result: " . ($user ? "User found" : "User not found"));

        if ($user && $password === $user['password']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            error_log("Login successful for user: " . $username);

            // Check if there's a redirect URL stored in session
            $redirect = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'carousel.php';
            unset($_SESSION['redirect_url']); // Clear the stored URL

            echo json_encode(['success' => true, 'redirect' => $redirect]);
            exit();
        } else {
            error_log("Login failed for user: " . $username);
            echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
            exit();
        }
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
        exit();
    }
} else {
    error_log("Invalid request method: " . $_SERVER["REQUEST_METHOD"]);
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}
?> 