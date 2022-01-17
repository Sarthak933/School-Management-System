<?php
include "dashboard.php";
include "header2.php";
$con=mysqli_connect("localhost","root","","lpss");
if(!$con)
 {
	die("unable to connect");
 }
$a=$_GET['sno'];
$sql= "SELECT * FROM `teachers`where id='$a' ";
$displayIntro = mysqli_query($con,$sql);
$count=mysqli_num_rows($displayIntro);
$displayTitle = mysqli_fetch_row($displayIntro);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="say4">
		<center><a href="teachers.php"><i class="fa fa-user" aria-hidden="true"></i> Teachers </a> / <i class="fa fa-user" aria-hidden="true"></i> Edit Teachers</center>
	</div>

	<div class="regtech">
		<form method="POST" action="update_profile.php?sno=<?php echo $displayTitle[0];?>">
			<input type="text" name="name" value="<?php echo $displayTitle[1];?>"><br><br>
			<input type="text" name="designation" value="<?php echo $displayTitle[2];?>"><br><br>
			<input type="date" name="dob" value="<?php echo $displayTitle[3];?>"><br><br>
			<input type="date" name="doa" value="<?php echo $displayTitle[4];?>"><br><br>
			<button value="Edit" name="Edit">Update!</button>
		</form>
	</div>

	<div class="space3"></div>
</body>
</html>