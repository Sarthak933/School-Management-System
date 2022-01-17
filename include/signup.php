<?php

if (isset($_POST['submit'])) {

	include_once 'db.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedpwd');";
					mysqli_query($conn, $sql);

					header("Location: ../adduser.php?signup=success");
					exit();

} else {
	header("Location: ../index.php");
	exit();
}