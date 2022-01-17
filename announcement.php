<?php
include "dashboard.php"
?>
<?php
include "header2.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lakshmipat Singhania School</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/gif" href="favicon.gif">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container1">
	<div class="say4">
		<center><a href="dashindex.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a> | <i class="fa fa-microphone" aria-hidden="true"></i> Announcement </center>
	</div>

<div class="box">
	<i class="fa fa-microphone" aria-hidden="true"></i>
	<form method="POST" action="include/announce.php">
		<input type="textarea" name="announce" placeholder="Announcement"><br><br>
		<input type="date" name="date"><br><br>
		<button value="submit">Announce</button>
	</form>
</div>

<div class="show5">
	<?php
		include "include/showannounced2.php"
	?>
</div>

<div class="space12"></div>
</div>
</body>
</html>