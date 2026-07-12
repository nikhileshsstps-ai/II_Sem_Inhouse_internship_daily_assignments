<?php
$host = "localhost";
$user = "root";
$password = "nikhil@5278";
$database = "SKIT";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection Successfull";
?>