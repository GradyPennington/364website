<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST["id"];
	
	$sql = "DELETE FROM airportEmployee WHERE Id = $id";
	if($conn->query($sql) === TRUE) {
	echo "Success";
	}
}
	$conn->close();
	
	header("Location: employees.php");
	exit();
?>
