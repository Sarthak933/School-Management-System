<?php
include "header.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>

</head>
<body>
	<div class="loginbox">
	<div class="log"><center><p>Please Log In!</p></center></div>
<form method="POST" action="include/loginp.php">
<input type="text" name="uid" placeholder="Username"><i class="fa fa-user fa-2x custo" aria-hidden="true"></i><br><br>
<input type="password" name="pwd" placeholder="Password"><i class="fa fa-lock fa-2x custom" aria-hidden="true"></i><br><br>
<button value="submit" name="submit">Login</button><br><br>
</form>	
</div>

<div class="space">
</div>
</body>
</html>


