<?php
include "dashboard.php"
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
		include "header2.php";
	?>

	<div class="say">
		<center><a href="dashindex.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a> / <i class="fa fa-graduation-cap" aria-hidden="true"></i> Students</center>
	</div>

	<div class="wrapper">
		<div class="say2">
			<h2><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Manage Students</h2>
			
		</div>
		<form class="add">
			<button class="addt">
				<a href="addstudent.php"><i class="fa fa-plus" aria-hidden="true"></i>
				Add Students</a>
			</button>
		</form>
		<form class="search">
			<i class="fa fa-search fa-2x cust" aria-hidden="true"></i> <input type="text" name="search" placeholder="Search">
		</form>
		<div class="show3">
			<?php
				include "include/show3.php";
			?>
			</div>
	</div>
	<div class="space5"></div>
</body>
</html>