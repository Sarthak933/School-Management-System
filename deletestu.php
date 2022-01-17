<?php
$con=mysqli_connect("localhost","root","","lpss");
if(!$con)
 {
	die("unable to connect");
 }


 if(isset($_GET['sno'])) 
 {
	$sno = $_GET['sno'];
	$fname=$_GET['fname'];
	$sql = "SELECT * FROM `students` where name='$fname'";
	//echo $sql1;
	$displayIntro = mysqli_query($con,$sql);
	$count=mysqli_num_rows($displayIntro);
	//echo $count;
	$displayTitle = mysqli_fetch_row($displayIntro);
//echo $displayTitle[1];
	if(($count==1)&&($displayTitle[1]>0))
	{
	//echo "hello";
		echo "<script>alert('Sorry Cannot delete the member');document.location='./students.php'</script>";
	}
	else
	{
	//echo "keep smiling";
	$delete = mysqli_query($con,"DELETE FROM students WHERE id = '$sno'");
	echo "done";
	header("location: students.php");
	}
	}
	
?>