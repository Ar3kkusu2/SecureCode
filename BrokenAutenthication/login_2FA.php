<?php
require 'composer/vendor/autoload.php';

$google2fa = new \PragmaRX\Google2FA\Google2FA();    

$user =  strtolower($_POST['user']);
$pass = $_POST['pass'];
//echo $user.'<br>'.$pass;
