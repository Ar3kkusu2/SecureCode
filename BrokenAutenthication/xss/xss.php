<?php

session_start();
$_SESSION["user"]='alex';

echo "erabilpena: http://.../?q=X <br>";
echo "<p>" . $_GET["q"] . "</p/";