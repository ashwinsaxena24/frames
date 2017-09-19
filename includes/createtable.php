<?php
$ping = 'pong';
require_once 'variables.php';
$conn = new mysqli(HOST,USER,PASS,DATABASE);
if($conn->connect_error) {
	die($conn->connect_error); //For Debugging purpose only
	//enable after testing
	//header("Location: http://localhost/Frames/error.php");
}

$query = "CREATE TABLE IF NOT EXISTS images (
		  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		  name VARCHAR(20),
		  category VARCHAR(10))";
$result = $conn->query($query);
if(!$result) die($conn->error);
echo "<p>Table created!</p>";
?>
