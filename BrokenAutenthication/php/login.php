<?php

require 'db.php';

$user =  strtolower($_GET['user']);
$pass = $_GET['pass'];

//echo $user.'<br>'.$pass;
//$hash = password_hash($pass, PASSWORD_DEFAULT);
//echo $hash;

//$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql;
$sql = "SELECT * FROM users WHERE user = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s',$user);
$stmt->execute();

//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    if (($row) && ($user == $row["user"]) && (password_verify($pass, $row["pass"]))) {*/
    session_start();
    $_SESSION['user'] = $user;
    header('location: login_ok.php');
    } else{    
    header('location: ../login.html');
    }
}

$conn->close();

