<?php $thisPage="rps"; ?>
<?php $title="Rock Paper Scissors"; ?>
<?php include("../topsubfolder.php"); ?>
<?php include("rpsfunction.php"); ?>
	<div class="center">
	<form>
	<p>Please enter rock, paper, or scissors</p>
	<input type="text" name="humanweapon">

	<input type="submit">
	</form>
	<?php $humanweapon = $_GET["humanweapon"]; ?>

	<?php $humanweapon = humanchoicecase($humanweapon); ?>
	<?php $rockpaperscissors = comprandom($rockpaperscissors); ?>
	<?php echo rpslogic($humanweapon, $rockpaperscissors); ?>
	</div>
</body>
</html>