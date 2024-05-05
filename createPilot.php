<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST["num"];
	$airline = $_POST["airline"];
	$seniority = $_POST["seniority"];
	
	$sql = "INSERT INTO Pilots (licenseNumber, Airline, seniorityNum) VALUES ($num, '$airline', $seniority)";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: pilots.php");
	exit();
	?>
