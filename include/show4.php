<title>Lakshmipat Singhania School</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

<?php
include_once "db.php";

$sql = "select id, days_period, first_p, second_p, third_p, fourth_p, recess_p, fifth_p, sixth_p, seventh_p, eight_p from time_table";

$result = mysqli_query($conn, $sql);
if ($result->num_rows>0) {
	echo "<show2><table cellpadding='5' cellspacing='0' align='center'> ";
		echo "<tr>";
			echo "<th>Days/Period</th>";
			echo "<th>I<sup>st</sup> Period</th>";
			echo "<th>II<sup>nd</sup> Period</th>";
			echo "<th>III<sup>rd</sup> Period</th>";
			echo "<th>II<sup>nd</sup> Period</th>";
			echo "<th>RECESS</th>";
			echo "<th>V<sup>th</sup> Period</th>";
			echo "<th>VI<sup>th</sup> Period</th>";
			echo "<th>VII<sup>th</sup> Period</th>";
			echo "<th>VIII<sup>th</sup> Period</th>";

		echo "</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["days_period"]. "</td>";
				echo "<td>".$row["first_p"]. "</td>";
				echo "<td>".$row["second_p"]. "</td>";
				echo "<td>".$row["third_p"]. "</td>";
				echo "<td>".$row["fourth_p"]. "</td>";
				echo "<td>".$row["recess_p"]. "</td>";
				echo "<td>".$row["fifth_p"]. "</td>";
				echo "<td>".$row["sixth_p"]. "</td>";
				echo "<td>".$row["seventh_p"]. "</td>";
				echo "<td>".$row["eight_p"]. "</td>";
				
			echo "</tr>";
		}
	echo "</table></show2>";
} else {
	echo "0 results";
}

?>