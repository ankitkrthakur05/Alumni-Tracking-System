<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$db="alumni";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
	
}

?>