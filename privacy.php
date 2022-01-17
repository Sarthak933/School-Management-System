<?php
include "dashboard.php";
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
			<center><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a> / <i class="fa fa-cog" aria-hidden="true"></i> Privacy Setting</center>
		</div>
		<h2 class="update">Update your Profile</h2>
		<div class="updatebox">
			<form method="#">
				<h2><center>Change Username</center></h2><hr class="hr">
				<input type="username" name="uid" placeholder="username" required><br><br>
				<h2><center>Change Password</center></h2><hr class="hr">
				<input type="password" name="pwd" placeholder=" Current Password" required><br><br>
				<input type="password" name="pwd1" placeholder="New Password" required><br><br>
				<input type="password" name="pwd2" placeholder="Re-Type Password" required><br><br>
				<button value="Submit"><i class="fa fa-check" aria-hidden="true"></i> Update </button>
			</form>
		</div>
	
</body>

</html>