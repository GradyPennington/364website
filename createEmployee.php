<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST["id"];
	$jobCode = $_POST["jobCode"];
	
	$sql = "INSERT INTO airportEmployee (Id, jobCode) VALUES ($id, $jobCode)";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: employees.php");
	exit();
	?>
