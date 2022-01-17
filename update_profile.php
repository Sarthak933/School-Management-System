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
$designation=mysqli_real_escape_string($con,$_POST['designation']);
$dob=mysqli_real_escape_string($con,$_POST['dob']);
$doa=mysqli_real_escape_string($con,$_POST['doa']);

$sql1="SELECT `Name` FROM `teachers` WHERE `Name`='$name' ";
$result1=mysqli_query($con,$sql1);
$count1=mysqli_num_rows($result1);
$sql=("UPDATE `teachers` SET `name`='$name' ,`designation`='$designation',`dob`='$dob',`doa`='$doa' WHERE id = '$sno' ");
$result=mysqli_query($con,$sql);
echo "<script>alert('Successfully Updated');document.location='./teachers.php'</script>";
    mysqli_close($con);
}
?>
  </body>
</html>
