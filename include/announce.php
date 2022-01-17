<?php
include_once "db.php";

$message = mysqli_real_escape_string($conn, $_POST['announce']);
$date = mysqli_real_escape_string($conn, $_POST['date']);

$sql = "INSERT INTO announcement (message, date_a) VALUES ('$message', '$date');";
$result = mysqli_query($conn, $sql);

if ($result == true) {
	header("Location: ../announcement.php?announced");
} else {
	header("Location: ../announcement.php?not_announced");
}

?>