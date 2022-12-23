<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "crud";

$conn = new mysqli($servernam, $username, $password, $db);

if ($conn->connect_errno) {
   echo "Connection error: " . ($conn->connect_errno)  . $conn->connect_error;
}

