<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$db = "crud";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_errno) {
   echo "Connection error: " . ($conn->connect_errno)  . $conn->connect_error;
}

