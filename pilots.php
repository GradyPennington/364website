<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");

$sql = "SELECT * FROM Pilots";
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
				margin: 0 auto;
				flex: 1;
				margin-right: 10px;
				}
			.table2 {
				
				border-collapse: collapse;
				width: 100%;
				font-size: 25px;
				padding: 8px;
				background-color: #f0f8ff;
				margin: 0 auto;
				flex: 1;
				margin-right: 10px;
				}
			.form {
				width: 350px;
				margin: 0 auto;
				padding: 12px;
				border radius: 5px;
				border: 1px solid #ccc;
				background-color: #f0f8ff;
				}
		</style>
	</head>
	<body>
		<div class ="head">
			<h1>Pilots</h1>
		</div>
		<div class ="links">
			<p>Site Navigation</p> <br>
			<a href="homepage.html">|Airport Home Page|</a>
			<a href="employees.php">|Employees|<a/>
			<a href="flights.php">|Flights|<a/>
		</div>
		</div>
			<div class="table2">
				<h1>Pilots</h1>
				<table border="1">
				<tr>
					<th>License Number</th>
					<th>Airline</th>
					<th>Seniorirty Number</th>
				</tr>
				<?php
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["licenseNumber"] . "</td>";
						echo "<td>" . $row["Airline"] . "</td>";
						echo "<td>" . $row["seniorityNum"] . "</td>";
						echo "</tr>";
					}
				?>
			</table>
			<h2>Insert Additional Data</h2>
			<form method="post" action="createPilot.php">
				<label for="num">Pilot's License Number:</label><br>
				<input type ="number" id="num" name="num"><br><br>
				
				<label for="airline">Airline Affiliation: </label><br>
				<input type ="text" id="airline" name="airline"><br><br>
				
				<label for="seniority">Seniority Number:</label><br>
				<input type ="number" id="seniority" name="seniority"><br><br>
				
				<button type="submit">Submit Additional Data</button>
				
			</form>
			
			<h2>Delete Pilot</h2>
			<form method="post" action="deletePilot.php">
				<label for="num">Pilot's License Number:</label><br>
				<input type ="number" id="num" name="num"><br><br>
				
				<button type="submit">Submit License Number to Delete</button>
				
			</form>
			
			<h2>Update Pilot (Use License Num as ID)</h2>
			<form method="post" action="updatePilot.php">
				<label for="num">Pilot's License Number:</label><br>
				<input type ="number" id="num" name="num"><br><br>
				
				<label for="airline">Airline Affiliation: </label><br>
				<input type ="text" id="airline" name="airline"><br><br>
				
				<label for="seniority">Seniority Number:</label><br>
				<input type ="number" id="seniority" name="seniority"><br><br>
				
				<button type="submit">Submit Data to Upate</button>
				
			</form>
			</div>
		</body>
</html>
