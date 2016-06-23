<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,'nflf');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
"Connected successfully";
$conn->set_charset("utf8");
?>
