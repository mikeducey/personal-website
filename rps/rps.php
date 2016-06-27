<?php $thisPage="rps"; ?>
<?php $title="Rock Paper Scissors"; ?>
<?php include("../topsubfolder.php"); ?>
	<div class="center">
	<form>
	<p>Please enter rock, paper, or scissors in lowercase</p>
	<input type="text" name="humanweapon">

	<input type="submit">
	</form>
	</div>
	<?php $humanweapon = $_GET["humanweapon"]; ?>
	<?php $humanweapon = strtolower($humanweapon); ?>
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
	</div>
</body>
</html>