<?php

if (isset($_POST['submit'])) {

	include_once 'db.php';


	$day = mysqli_real_escape_string($conn, $_POST['day']);
	$first_p = mysqli_real_escape_string($conn, $_POST['first_p']);
	$second_p = mysqli_real_escape_string($conn, $_POST['second_p']);
	$third_p = mysqli_real_escape_string($conn, $_POST['third_p']);
	$fourth_p = mysqli_real_escape_string($conn, $_POST['fourth_p']);
	$recess_p = mysqli_real_escape_string($conn, $_POST['recess_p']);
	$fifth_p = mysqli_real_escape_string($conn, $_POST['fifth_p']);
	$sixth_p = mysqli_real_escape_string($conn, $_POST['sixth_p']);
	$seventh_p = mysqli_real_escape_string($conn, $_POST['seventh_p']);
	$eight_p = mysqli_real_escape_string($conn, $_POST['eight_p']);
	

	$sql = "INSERT INTO time_table (days_period, first_p, second_p, third_p, fourth_p, recess_p, fifth_p, sixth_p, seventh_p, eight_p) VALUES ('$day', '$first_p', '$second_p', '$third_p', '$fourth_p', '$recess_p', '$fifth_p', '$sixth_p', '$seventh_p', '$eight_p');";
					mysqli_query($conn, $sql);

					header("Location: ../time.php?entered=success");
					exit();

} else {
	header("Location: ../index.php?entered=failure");
	exit();
}