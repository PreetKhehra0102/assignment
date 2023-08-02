<?php
// Include db_connection.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user-submitted data from $_POST
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Validate and sanitize the data
    $title = htmlspecialchars(trim($title));
    $content = htmlspecialchars(trim($content));

    // Perform database insert
    $sql = "INSERT INTO content (title, content) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content]);

    // Redirect to the manage_content.html page
    header("Location: manage_content.html");
    exit();
}
?>
