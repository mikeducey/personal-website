<?php 
/*This just lowers all case entries to lowercase, in case of random capitalization */
function humanchoicecase($humanweapon) {
	$humanweapon = strtolower($humanweapon);
	return $humanweapon;
}

/*This is the function that randomly determines the computer's weapon */
function comprandom($compweapon) {
$compweapon = ['rock', 'paper', 'scissors'];
	$compweapon = $compweapon[mt_rand(0, count($compweapon) - 1)];
	return $compweapon;
}

/* This is the logic that compares the two weapon choices and returns whether it is a win, loss or tie */
function rpslogic($humanweapon, $compweapon) {

$win = "The computer chose $compweapon, you win!";
$loss = "The computer chose $compweapon, you lose!";
$tie = "The computer chose $compweapon, you tie!";
$wrong = "You have not chosen a valid weapon!";

if ($humanweapon) {
	if ($humanweapon == "rock") {
		if ($humanweapon == $compweapon) {
			return $tie; }
		elseif ($humanweapon == "rock" And $compweapon == "paper") {
			return $loss; }
		elseif ($humanweapon == "rock" And $compweapon == "scissors") {
			return $win; }
	}
	elseif ($humanweapon == "paper") {
		if ($humanweapon == $compweapon) {
			return $tie; }
		elseif ($humanweapon == "paper" And $compweapon == "scissors") {
			return $loss; }
		elseif ($humanweapon == "paper" And $compweapon == "rock") {
			return $win; }
	}
	elseif ($humanweapon == "scissors") {
		if ($humanweapon == $compweapon) {
			return $tie; }
		elseif ($humanweapon == "scissors" And $compweapon == "rock") {
			return $loss; }
		elseif ($humanweapon == "scissors" And $compweapon == "paper") {
			return $win; }
	}
	elseif ($humanweapon != "rock" or $humanweapon != "paper" or $humanweapon != "scissors") {
		return $wrong; }
	}
}
?>