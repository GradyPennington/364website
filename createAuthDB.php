<?php

$conn new mysqli("localhost", "student", "CompSci364", "authDB");

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS authDB";
if($conn->query($sql) == TRUE) {
	echo "Database created success<br>";
} else {
	echo "Error creating database: " . $conn->error . "<br>";
}

$conn->select_db("student");

$sql = "CREATE TABLE IF NOT EXISTS Users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL UNIQUE,
	password_hash VARCHAR(255) NOT NULL
	)";
	
if($conn->query($sql) == TRUE) {
	echo "Table Users created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
