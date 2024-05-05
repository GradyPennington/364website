<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$Airline = $_POST["Airline"];
	$Reg = $_POST["Reg"];
	$pax = $_POST["pax"];
	$time = $_POST["time"];
	
	$sql = "INSERT INTO Flights (Airline, regNum, numPax, depTime) VALUES ('$Airline', '$Reg', $pax, $time)";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: flights.php");
	exit();
	?>
