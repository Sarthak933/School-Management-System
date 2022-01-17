<?php
include "dashboard.php";
include "header2.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lakshmipat Singhania School</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/gif" href="favicon.gif">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="plugin/lightmin/style2.css">
	<script type="text/javascript" src="plugin/lightmin/script.js"></script>
</head>
<body>

	<div class="say4">
		<center><a href="dashindex.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a> | <i class="fa fa-folder-open-o" aria-hidden="true"></i> Art Gallery </center>
	</div>

	<div class="upload">
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br><br>
		<button type="submit" name="submit">Upload</button>
	</form>
	</div>

	<div class="gallery">
	<?php
	include "show.php"
	?>
	</div>

	
	
</body>
</html>