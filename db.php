<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$db = "db";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>