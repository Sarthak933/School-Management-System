<?php
include_once "db.php";

$sql = "select id,name, fname, mname, phone, dob, address, class, gender from students";
$result = mysqli_query($conn, $sql);
if ($result->num_rows>0) {
	echo "<div class='table-box'><table  cellpadding='10' cellspacing='0' width='90%' align='center'> ";
		echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Father's Name</th>";
			echo "<th>Mother's Name</th>";
			echo "<th>Phone No</th>";
			echo "<th>Date_of_Birth</th>";
			echo "<th>Address</th>";
			echo "<th>Class</th>";
			echo "<th>Gender</th>";
			echo "<th>Action</th>";
		echo "</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["name"]. "</td>";
				echo "<td>".$row["fname"]. "</td>";
				echo "<td>".$row["mname"]. "</td>";
				echo "<td>".$row["phone"]. "</td>";
				echo "<td>".$row["dob"]. "</td>";
				echo "<td>".$row["address"]. "</td>";
				echo "<td>".$row["class"]. "</td>";
				echo "<td>".$row["gender"]. "</td>";
				?>

					  <td>

                                         <div class="btn-group">
                                      <a class="btn btn-primary" href="./edit1.php?sno=<?php echo $row['id'];?>">Edit</a>                   

                                       <a class="btn btn-danger" href="./deletestu.php?sno=<?php echo $row['id'];?> & fname=<?php echo $row['name'] ?>"  onclick="return confirm('Are you sure?')"><i class="icon_close_alt2"></i>Delete</a>
                                  </div>
                                            </td>
<?php
			echo "</tr>";
		}
	echo "</table></div>";
} else {
	echo "0 results";
}