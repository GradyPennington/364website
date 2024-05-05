<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST["id"];
	$jobCode = $_POST["jobCode"];
	
	$sql = "UPDATE airportEmployee SET jobCode = $jobCode WHERE Id = $id";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: employees.php");
	exit();
	?>
