<?php
include_once "db.php";

$name = mysqli_real_escape_string($conn, $_POST['name']);
$designation = $_POST['designation'];
$dob = $_POST['dob'];
$doa = $_POST['doa'];

$sql = "INSERT INTO teachers (name, designation, dob, doa) VALUES ('$name', '$designation', '$dob', '$doa');";
$result = mysqli_query($conn, $sql);

if ($result == true) {
	header("Location: ../addteachers.php?inserted");
} else {
	header("Location: ../addteachers.php?not_inserted");
}

?>