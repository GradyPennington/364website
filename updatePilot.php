<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST["num"];
	$airline = $_POST["airline"];
	$seniority = $_POST["seniority"];
	
	$sql = "UPDATE Pilots SET Airline='$airline', seniorityNum=$seniority WHERE licenseNumber = $num";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: pilots.php");
	exit();
	?>
