<?php
include_once "db.php";

$sql = "select message, date_a from announcement";

$result = mysqli_query($conn, $sql);
if ($result->num_rows>0) {
	echo "<table cellpadding='5' align='center'> ";
		echo "<tr>";
			echo "<th>Announcement</th>";
			echo "<th>Date Added</th>";
		echo "</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["message"]. "</td>";
				echo "<td>".$row["date_a"]. "</td>";
			echo "</tr>";
		}
	echo "</table>";
} else {
	echo "No Announcement";
}