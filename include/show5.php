<title>Lakshmipat Singhania School</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

<?php
include_once "db.php";

$sql = "select id, name, designation, dob, doa from teachers";

$result = mysqli_query($conn, $sql);
if ($result->num_rows>0) {
	echo "<table cellpadding='5' cellspacing='0' width='90%' align='center'> ";
		echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Designation</th>";
			echo "<th>Date_of_Birth</th>";
			echo "<th>Date_of_Appointment</th>";
		echo "</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["name"]. "</td>";
				echo "<td>".$row["designation"]. "</td>";
				echo "<td>".$row["dob"]. "</td>";
				echo "<td>".$row["doa"]. "</td>";
				
			echo "</tr>";
		}
	echo "</table>";
} else {
	echo "0 results";
}