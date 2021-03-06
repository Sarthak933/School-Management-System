<?php

session_start();

if (isset($_POST['submit'])) {
	include 'db.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers 
	//check if these inputs are empty

	if (empty($uid) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck < 1) {
			header("Location: ../login.php?login=no_user_exist");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//de hashing the password

				$hashedpwdcheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedpwdcheck == false) {
					header("Location: ../login.php?login=error");
					exit();
				} elseif ($hashedpwdcheck == true) {
					//log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];

					header("Location: ../dashindex.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error");
	exit();
}