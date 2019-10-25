<?php
if (!isset($_SESSION['user'])) {
    header('login.html');
}
?>
<html>
    <head>
        <title>Login OK</title>
    </head>
    <body>
        <h1><b>Bienvenido <?php echo $_SESSION['user']?>;</b></h1><br>
        <button type='submit' action=<?php unset($_SESSION['user']);?>>LogOut
    </body>
</html>