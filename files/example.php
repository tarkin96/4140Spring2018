<<<<<<< HEAD
<?php
include('config.php');

// Check connection
if ($db->connect_error) {
	echo "this sucks";
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully";
echo "wade";
=======
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
>>>>>>> caf55008a106bccbb64efed8647937aa1ca41b79
?>