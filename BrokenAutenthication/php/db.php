<?php

$servername = "localhost";
$username = "alex";
$password = "admin1234";
$db = "securecode";

// Create conn
$conn = new mysqli($servername, $username, $password, $db);

// Check conn
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";