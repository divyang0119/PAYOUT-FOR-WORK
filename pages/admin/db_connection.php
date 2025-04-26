<?php
$host = 'localhost';     // or your database host
$user = 'root'; // your database username
$pass = ''; // your database password
$db   = 'payoutforwork'; // your database name

// Create connection
$con = new mysqli($host, $user, $pass, $db);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// You can echo this message for testing purposes
// echo "Connected successfully";
?>
