<?php
// Database configuration
$db_host = "database-1.c3ymeikqigrb.us-east-1.rds.amazonaws.com"; // Replace with your RDS endpoint
$db_username = "admin"; // Replace with your RDS username
$db_password = "yash1234"; // Replace with your RDS password
$db_name = "grocery"; // Replace with your RDS database name
$db_port = 3306; // Replace with your RDS port if it's not the default (3306 for MySQL)

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Further code to interact with the database...
?>
