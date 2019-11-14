<?php

require 'db.php';

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
    session_start();
    $_SESSION['user'] = $user;
    header('location: login_ok.php');
} else{    
    header('location: login.html');
}

$conn->close();

