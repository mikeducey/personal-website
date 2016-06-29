<?php $thisPage="rpstest"; ?>
<?php $title="Rock Paper Scissors Test"; ?>
<?php include("rpsfunction.php"); ?>

<?php echo "\n\nTests Begin Here\n\n";

echo "What happens when the human enters \"rock\"\n";
rpslogic("rock", "rock");

	if ("The computer chose $compweapon, you tie!") {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}

echo "What happens when the human enters \"PAPER\"\n";
rpslogic("paper", "rock");

	if ("The computer chose $compweapon, you win!")  {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}
echo "What happens when the human enters \"stone\"\n";
rpslogic("stone", "rock");
	if ("You have not chosen a valid weapon") {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}
?>
