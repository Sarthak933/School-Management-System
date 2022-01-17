<?php
include "dashboard.php";
include "header2.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="say4">
		<center><a href="teachers.php"><i class="fa fa-user" aria-hidden="true"></i> Teachers </a> / <i class="fa fa-user" aria-hidden="true"></i> Add Teachers</center>
	</div>

	<div class="regtech">
		<form method="POST" action="include/at.php">
			<input type="text" name="name" placeholder="Full Name"><br><br>
			<input type="text" name="designation" placeholder="Designation"><br><br>
			<input type="date" name="dob"><br><br>
			<input type="date" name="doa"><br><br>
			<button value="submit" name="submit">Register!</button>
		</form>
	</div>

	<div class="space3"></div>
</body>
</html>