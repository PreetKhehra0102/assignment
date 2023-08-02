<?php
// Include db_connection.php
include 'db_connection.php';

// Function to authenticate user session
function authenticateSession() {
    // Start or resume the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        // User is not logged in, redirect to login page or display an error message
        header("Location: login.php");
        exit();
    }

    // Additional session validation logic if needed
    // ...

    // Check if the user's session is still active and valid
    // For example, you can check if the session timeout period has expired

    // If the session is not valid, destroy the session and redirect to login page or display an error message
    // Example:
    // if (!isValidSession()) {
    //     session_destroy();
    //     header("Location: login.php");
    //     exit();
    // }
}

// Authenticate user session
authenticateSession();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve content ID from $_POST
    $id = $_POST['id'];

    // Validate and sanitize the content ID
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id !== false) {
        // Perform database delete
        $sql = "DELETE FROM content WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    // Redirect to the manage_content.html page
    header("Location: manage_content.html");
    exit();
}
?>
