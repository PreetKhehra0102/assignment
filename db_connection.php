<?php
// Database connection code

// Database configuration
$host = "localhost"; // Change this to your database host
$dbname = "your_database"; // Change this to your database name
$username = "your_username"; // Change this to your database username
$password = "your_password"; // Change this to your database password

try {
  // Establish database connection
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  
  // Set error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Set default fetch mode to associative array
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
  // Additional database configuration options if needed
  // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // $pdo->setAttribute(PDO::MYSQL_ATTR_FOUND_ROWS, true);
  
  // Display success message
  echo "Database connection successful";
} catch (PDOException $e) {
  // Display error message
  echo "Database connection failed: " . $e->getMessage();
  exit();
}
?>
