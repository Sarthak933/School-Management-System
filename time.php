<!DOCTYPE html>
<html>
<head>
	<title>Lakshmipat Singhania School</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/gif" href="favicon.gif">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

include "header2.php";
include "dashboard.php";

?>

	<div class="say">
		<center><a href="tt.php"><i class="fa fa-table" aria-hidden="true"></i> Time Table</a> / <i class="fa fa-table" aria-hidden="true"></i> Add Time Table</center>
	</div>

	<div class="time">
	<form method="POST" action="include/insert_time_table.php">
		<div class="one">
			<select name="day">
				<option value="DAY">Day</option>
				<option value="MONDAY">Monday</option>
				<option value="TUESDAY">Tuesday</option>
				<option value="WEDNESDAY">Wednesday</option>
				<option value="THURSDAY">Thursday</option>
				<option value="FRIDAY">Friday</option>
				<option value="SATURDAY">Saturday</option>
			</select>

			
			<select name="first_p" >
				<option value="">First Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select>

			
			<select name="second_p">
				<option value="">Second Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select>

		
			<select name="third_p">
				<option value="">Third Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select><br><br>
		</div>

			<div class="two"> 
			<select name="fourth_p">
				<option value="">Fourth Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select>

			
			<select name="recess_p">
				<option value="">Recess</option>
				<option value="R">R</option>
				<option value="E">E</option>
				<option value="C">C</option>
				<option value="E">E</option>
				<option value="S">S</option>
				<option value="S">S</option>
			</select>

			
			<select name="fifth_p">
				<option value="">Fifth Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select>

			
			<select name="sixth_p">
				<option value="">Sixth Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select><br><br>
		</div>
			<div class="three">
			<select name="seventh_p" class="first_p">
				<option value="">Seventh Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select>

			
			<select name="eight_p" class="first_p">
				<option value="">Eight Period</option>
				<option value="CHEMISTRY">Chemistry</option>
				<option value="MATHS">Maths</option>
				<option value="PHYSICS">Physics</option>
				<option value="M.W.T/PHY. EDU./HINDI">M.W.T/Phy Edu./Hindi</option>
				<option value="ENGLISH">English</option>
				<option value="GAMES">Games</option>
				<option value="LIBRARY">Library</option>
				<option value="G.S.T">G.S.T</option>
				<option value="PHY/CHEM.practical">PHY/CHEM.practical</option>
				<option value="CCA">CCA</option>
				<option value="COMPUTER">COMPUTER</option>
			</select>
		</div>
			
			<button name="submit" value="submit">SUBMIT</button>
	</form>
</div>


</body>
</html>