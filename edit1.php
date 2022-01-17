
<?php
include "dashboard.php";
include "header2.php";

$con=mysqli_connect("localhost","root","","lpss");
if(!$con)
 {
	die("unable to connect");
 }
$a=$_GET['sno'];
$sql= "SELECT * FROM `students`where id='$a' ";
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
		<center><a href="students.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students </a> / <i class="fa fa-user" aria-hidden="true"></i> Edit Students</center>
	</div>

	<div class="regtech1">
<?php
if($count==1)
{
	?>
		<form method="POST" action="update_student.php?sno=<?php echo $displayTitle[0];?>">


			<input type="text" name="name" value="<?php echo $displayTitle[1];?>"><br><br>
			<input type="text" name="fname" value="<?php echo $displayTitle[2];?>"><br><br>
			<input type="text" name="mname" value="<?php echo $displayTitle[3];?>"><br><br>
			<input type="number" name="phone" value="<?php echo $displayTitle[4];?>"> <br><br>
			<input type="date" name="dob" value="<?php echo $displayTitle[5];?>"><br><br>
			<input type="textarea" name="address" value="<?php echo $displayTitle[6];?>"><br><br>
			<input type="number" name="class" value="<?php echo $displayTitle[7];?>"><br><br>
			<button value="Edit" name="Edit">Update Student!</button>
		</form>
		<?php
	}
	?>
	</div>

	<div class="space4"></div>

</body>
</html>
