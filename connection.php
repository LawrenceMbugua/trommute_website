<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "trommute";


$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$con) {
    die("Failed to connect!");
}
?>


