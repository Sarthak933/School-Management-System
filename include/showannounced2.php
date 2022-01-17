<?php
include_once "db.php";

$sql = "select id, message, date_a from announcement";

$result = mysqli_query($conn, $sql);
if ($result->num_rows>0) {
	echo "<table cellpadding='5' align='center'> ";
		echo "<tr>";
			echo "<th>Announcement</th>";
			echo "<th>Date Added</th>";
			echo "<th>Action</th>";
		echo "</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["message"]. "</td>";
				echo "<td>".$row["date_a"]. "</td>";
			?>

			<td>                  
			 <a class="btn btn-danger" href="./delete1.php?sno=<?php echo $row['id'];?> & message=<?php echo $row['message'] ?>"  onclick="return confirm('Are you sure?')">Delete</a>
            </td>
<?php

			echo "</tr>";
		}
	echo "</table>";
} else {
	echo "no announcements";
}