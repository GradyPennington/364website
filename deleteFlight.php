<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$Reg = $_POST["Reg"];
	
	$sql = "DELETE FROM Flights WHERE regNum = '$Reg'";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: flights.php");
	exit();
?>
