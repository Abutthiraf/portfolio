<?php 
	// Database credentials
	$servername = "localhost";
	$username = "root"; // replace with your MySQL username
	$password = ""; // replace with your MySQL password
	$dbname = "portfolio";

	// Create a connection to the database
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check for connection error
	if ($conn->connect_error) {
		echo "successiful";
   		 die("Connection failed: " . $conn->connect_error);
	}
 ?>