<?php

$servername = "localhost";
$username = "alex";
$password = "admin1234";
$db = "securecode";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

/*echo $_POST["user"];
echo "<br>";
echo $_POST["pass"];*/

