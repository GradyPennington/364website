<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");

$sql = "SELECT * FROM Flights";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Flights</title>
		<style>
			.head {
				border: 1px solid black;
				padding: 20px;
				margin: 10px;
				text-align: center;
				font-size: 30px;
				background-color: beige;
				}
			.links{
				border: 1px solid black;
				padding: 20px;
				margin: 10px;
				text-align: center;
				font-size: 22px;
				background-color: #f0f8ff;
				}
			.table {
				
				border-collapse: collapse;
				width: 100%;
				font-size: 25px;
				padding: 8px;
				background-color: beige;
				}
			.form {
				width: 100%;
				padding: 12px;
				border radius: 5px;
				border: 1px solid #ccc;
				background-color: #f0f8ff;
			body{
				background-color: lightgray;
				margin: 0;
				padding: 0;
				height: 100%;
				}
		</style>
	</head>
	<body>
		<div class ="head">
			<h1>Flights</h1>
		</div>
		<div class ="links">
			<p>Site Navigation</p> <br>
			<a href="homepage.html">|Airport Home Page|</a>
			<a href="employees.php">|Employees|<a/>
			<a href="pilots.php">|Pilots|<a/>
		</div>
		<div class="table">
			<h1>Flight Data</h1><br>
			<table border="1">
				<tr>
					<th>Airline</th>
					<th>Registration Number</th>
					<th>Number of Passengers</th>
					<th>Departure Time</th>
				</tr>
				<?php
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["Airline"] . "</td>";
						echo "<td>" . $row["regNum"] . "</td>";
						echo "<td>" . $row["numPax"] . "</td>";
						echo "<td>" . $row["depTime"] . "</td>";
						echo "</tr>";
					}
				?>
			</table>
			<div class="form">
			<h1>Input Additional Flight Data</h1><br>
			<form method="post" action="createFlight.php">
				<label for="Airline">Airline:</label><br>
				<input type ="text" id="Airline" name="Airline"><br><br>
				
				<label for="Reg">Registration Number:</label><br>
				<input type ="text" id="Reg" name="Reg"><br><br>
				
				<label for="pax">Number of Passengers:</label><br>
				<input type ="number" id="pax" name="pax"><br><br>
				
				<label for="time">Departure Time</label><br>
				<input type ="text" id="time" name="time"><br><br>
				
				<button type="submit">Submit Additional Data</button>
				
			</form>
			<h1>Delete Flight Data</h1><br>
			<form method="post" action="deleteFlight.php">
				
				<label for="Reg">Registration Number:</label><br>
				<input type ="text" id="Reg" name="Reg"><br><br>
				
				<button type="submit">Submit Flight to Delete</button>
				
			</form>
			
			<h1>Update Flight Data (Use Registration Number as ID)</h1><br>
			<form method="post" action="updateFlight.php">
				<label for="Airline">Airline:</label><br>
				<input type ="text" id="Airline" name="Airline"><br><br>
				
				<label for="Reg">Registration Number:</label><br>
				<input type ="text" id="Reg" name="Reg"><br><br>
				
				<label for="pax">Number of Passengers:</label><br>
				<input type ="number" id="pax" name="pax"><br><br>
				
				<label for="time">Departure Time</label><br>
				<input type ="text" id="time" name="time"><br><br>
				
				<button type="submit">Submit Flight to Update</button>
		</div>
	</body>
	</html>
