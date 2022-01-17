<?php session_start();
?>
<html lang="en">
  <body>

<?php
$con=mysqli_connect("localhost","root","","lpss");
if(!$con)
 {
	die("unable to connect");
 }
$sno=$_GET['sno'];
 if(isset($_POST['Edit']))
{ 

 $name=mysqli_real_escape_string($con,$_POST['name']); 
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$mname=mysqli_real_escape_string($con,$_POST['mname']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$dob=mysqli_real_escape_string($con,$_POST['dob']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$class=mysqli_real_escape_string($con,$_POST['class']);

$sql1="SELECT `Name` FROM `students` WHERE `Name`='$fname' ";
$result1=mysqli_query($con,$sql1);
$count1=mysqli_num_rows($result1);
$sql=("UPDATE `students` SET `name`='$name' ,`fname`='$fname',`mname`='$mname',`phone`='$phone',`dob`='$dob',`address`='$address',`class`='$class' WHERE id = '$sno' ");
echo $sql;
$result=mysqli_query($con,$sql);
echo "<script>alert('Successfully Updated');document.location='./students.php'</script>";
		mysqli_close($con);
}
?>
  </body>
</html>
