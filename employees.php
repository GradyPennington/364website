<?php
$conn = new mysqli("localhost", "student", "CompSci364", "airportDB");

$sql = "SELECT * FROM airportEmployee";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Employees</title>
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
			<h1>Employees</h1>
		</div>
		<div class ="links">
			<p>Site Navigation</p> <br>
			<a href="flights.php">|Flights|</a>
			<a href="homepage.html">|Airport Homepage|<a/>
			<a href="pilots.php">|Pilots|<a/>
		</div>
		<div class="table">
			<h1>Airport Employees</h1>
			<table border="1">
				<tr>
					<th>Employee ID</th>
					<th>Job Code</th>
				</tr>
				<?php
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["Id"] . "</td>";
						echo "<td>" . $row["jobCode"] . "</td>";
						echo "</tr>";
					}
				?>
				
			</table>
			<h2>Insert Additional Data</h2>
			<form method="post" action="createEmployee.php">
				<label for="id">Employee ID:</label><br>
				<input type ="number" id="id" name="id"><br><br>
				
				<label for="salary">Job Code:</label><br>
				<input type ="number" id="jobCode" name="jobCode"><br><br>
				
				<button type="submit">Submit Additional Data</button>
				
			</form>
			
			<h2>Choose Employee to Delete</h2>
			<form method="post" action="deleteEmployee.php">
				<label for="id">Employee ID:</label><br>
				<input type ="number" id="id" name="id"><br><br>
				
				<button type="submit">Submit ID to Delete</button>
				
			</form>
			
			<h2>Update Employee (Use ID as Key)</h2>
			<form method="post" action="updateEmployee.php">
				<label for="id">Employee ID:</label><br>
				<input type ="number" id="id" name="id"><br><br>
				
				<label for="salary">Job Code:</label><br>
				<input type ="number" id="jobCode" name="jobCode"><br><br>
				
				<button type="submit">Submit ID and Updates</button>
				
			</form>
			</div>
	</body>
	</html>
