<?php function humanchoicecase($humanweapon) {
	$humanweapon = strtolower($humanweapon);
	return $humanweapon;
} ?>

<?php function comprandom($rockpaperscissors) {
$rockpaperscissors = ['rock', 'paper', 'scissors'];
	$rockpaperscissors = $rockpaperscissors[mt_rand(0, count($rockpaperscissors) - 1)];
	return $rockpaperscissors;
} ?>

<?php function rpslogic($humanweapon, $rockpaperscissors) {

$win = "The computer chose $rockpaperscissors, you win!";
$loss = "The computer chose $rockpaperscissors, you lose!";
$tie = "The computer chose $rockpaperscissors, you tie!";
$wrong = "You have not chosen a valid weapon";

if ($humanweapon) {
	if ($humanweapon == "rock") {
		if ($humanweapon == $rockpaperscissors) {
			return $tie; }
		elseif ($humanweapon == "rock" And $rockpaperscissors == "paper") {
			return $loss; }
		elseif ($humanweapon == "rock" And $rockpaperscissors == "scissors") {
			return $win; }
	}
	elseif ($humanweapon == "paper") {
		if ($humanweapon == $rockpaperscissors) {
			return $tie; }
		elseif ($humanweapon == "paper" And $rockpaperscissors == "scissors") {
			return $loss; }
		elseif ($humanweapon == "paper" And $rockpaperscissors == "rock") {
			return $win; }
	}
	elseif ($humanweapon == "scissors") {
		if ($humanweapon == $rockpaperscissors) {
			return $tie; }
		elseif ($humanweapon == "scissors" And $rockpaperscissors == "rock") {
			return $loss; }
		elseif ($humanweapon == "scissors" And $rockpaperscissors == "paper") {
			return $win; }
	}
	elseif ($humanweapon != "rock" or $humanweapon != "paper" or $humanweapon != "scissors") {
		return $wrong; }
	}
}
?>