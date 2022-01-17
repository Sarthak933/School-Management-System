<?php
include_once "db.php";



$name = mysqli_real_escape_string($conn, $_POST['name']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$mname = mysqli_real_escape_string($conn, $_POST['mname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$x = mysqli_real_escape_string($conn, $_POST['class']);
$y = mysqli_real_escape_string($conn, $_POST['section']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$class = $x.' '.$y;

$sql = "INSERT INTO students (name, fname, mname, phone, dob, address, class, gender) VALUES ('$name', '$fname', '$mname', '$phone', '$dob', '$address', '$class', '$gender');";
$result = mysqli_query($conn, $sql);

if ($result == true) {
	header("Location: ../addstudent.php?inserted");
} else {
	header("Location: ../addstudent.php?not_inserted");
}

?>