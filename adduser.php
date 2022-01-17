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
	<div class="adduser">
		<div class="au"><h3>Add User !</h3></div>
	<form action="include/signup.php" method="POST">
		<input type="text" name="first" placeholder="Firstname"><br><br>
		<input type="text" name="last" placeholder="Lastname"><br><br>
		<input type="text" name="email" placeholder="E-mail"><br><br>
		<input type="text" name="uid" placeholder="Username"><br><br>
		<input type="password" name="pwd" placeholder="Password"><br><br>
		<button type="submit" name="submit">Register !</button>
	</form>
	</div>
	<div class="space123"></div>
</body>
</html>