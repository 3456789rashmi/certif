<?php
// Database configuration
$host = 'sql308.infinityfree.com';
$username = 'if0_41016670';
$password = 'wEVxEEciqk0a9';
$database = 'if0_41016670_certificate_validation';
$port = 3306; // IMPORTANT: MySQL port

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");
?>
