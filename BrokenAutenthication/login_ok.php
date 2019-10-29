<?php

session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.html');
}
?>

<html>
    <head>
        <title>Login OK</title>
    </head>
    <body>
        <h1><b>Bienvenido <?php echo ucfirst($_SESSION['user'])?></b></h1><br>
        <form method='post' action='logout.php'>
            <input type='submit' value='LogOut'>
        </form>
    </body>
</html>