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
		<center><a href="students.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students </a> / <i class="fa fa-user" aria-hidden="true"></i> Add Students</center>
	</div>

	<div class="regtech1">
		<form method="POST" action="include/as.php">
			<input type="text" name="name" placeholder="Full Name"><br><br>
			<input type="text" name="fname"placeholder="Father's Name"><br><br>
			<input type="text" name="mname"placeholder="Mother's Name"><br><br>
			<input type="number" name="phone"placeholder="Phone No."><br><br>
			<input type="date" name="dob"><br><br>
			<input type="textarea" name="address"placeholder="Address"><br><br>
			<select name="class">
				<option value="">Class</option>
				<option value="L.K.G">L.K.G</option>
				<option value="U.K.G">U.K.G</option>
				<option value="1st">1st</option>
				<option value="2nd">2nd</option>
				<option value="3rd">3rd</option>
				<option value="4th">4th</option>
				<option value="5th">5th</option>
				<option value="6th">6th</option>
				<option value="7th">7th</option>
				<option value="8th">8th</option>
				<option value="9th">9th</option>
				<option value="10th">10th</option>
				<option value="11th">11th</option>
				<option value="12th">12th</option>
			</select><br><br>
			<select name="section">
				<option value=""> Section </option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
			</select><br><br>
			<div class="gender">Gender
			<input type="radio" name="gender" value="Male" class="male" required>male<input type="radio" name="gender" value="female" class="Female" required>female<br><br></div>
			<button value="submit" name="submit">Add Student!</button>
		</form>
	</div>

	<div class="space4"></div>

</body>
</html>