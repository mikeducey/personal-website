<?php $thisPage="rps"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<title>Rock Paper Scissors</title>
	</head>
<body>
	<div class="wrapper">
			<div class="container">
			<?php include("../intro.php"); ?>
			<?php include("../navigation.php"); ?>
			</div>
	<div class="main">
	<center>
	<form>
	<p>Please enter rock, paper, or scissors in lowercase</p>
	<input type="text" name="humanweapon">

	<input type="submit">
	</form>
	<?php $humanweapon = $_GET["humanweapon"]; ?>
	<?php $rockpaperscissors = ['rock', 'paper', 'scissors'];
	$rockpaperscissors = $rockpaperscissors[mt_rand(0, count($rockpaperscissors) - 1)]; ?>
	<?php if ($humanweapon == "rock") {
		if ($humanweapon == $rockpaperscissors) {
			echo "The computer chose $rockpaperscissors, you tie!"; }
		elseif ($humanweapon == "rock" And $rockpaperscissors == "paper") {
			echo "The computer chose $rockpaperscissors, you lose!"; }
		elseif ($humanweapon == "rock" And $rockpaperscissors == "scissors") {
			echo "The computer chose $rockpaperscissors, you win!"; }
		} 
	elseif ($humanweapon == "paper") {
		if ($humanweapon == $rockpaperscissors) {
			echo "The computer chose $rockpaperscissors, you tie!"; }
		elseif ($humanweapon == "paper" And $rockpaperscissors == "scissors") {
			echo "The computer chose $rockpaperscissors, you lose!"; }
		elseif ($humanweapon == "paper" And $rockpaperscissors == "rock") {
			echo "The computer chose $rockpaperscissors, you win!"; }
		}
	elseif ($humanweapon == "scissors") {
		if ($humanweapon == $rockpaperscissors) {
			echo "The computer chose $rockpaperscissors, you tie!"; }
		elseif ($humanweapon == "scissors" And $rockpaperscissors == "rock") {
			echo "The computer chose $rockpaperscissors, you lose!"; }
		elseif ($humanweapon == "scissors" And $rockpaperscissors == "paper") {
			echo "The computer chose $rockpaperscissors, you win!"; }
		} 
	?>
	</center>
</body>
</html>