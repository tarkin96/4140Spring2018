<?php
$servername = "mysql1.cs.clemson.edu";
$username = "jwk";
$password = "cpsc!4140";
$db = "TwitchDoesTownHall";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>