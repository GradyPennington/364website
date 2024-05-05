<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST["num"];
	
	$sql = "DELETE FROM Pilots WHERE licenseNumber = $num";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: pilots.php");
	exit();
?>
