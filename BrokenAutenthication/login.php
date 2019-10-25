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

$user =  strtolower($_POST['user']);
$pass = $_POST['pass'];

//echo $user.'<br>'.$pass;
//$hash = password_hash($pass, PASSWORD_DEFAULT);
//echo $hash;

$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql;

$result = $conn->query($sql);

$row = $result->fetch_assoc();
if (($row) && ($user == $row["user"]) && (password_verify($password, $row["pass"]))) {
    echo "OK";
} else{
    $_SESSION['user'] = $user;
    header('login_ok.html');
}

$conn->close();

