<?php $thisPage="TTT"; ?>
<?php $title="Tic Tac Toe"; ?>
<?php include("topmain.php"); ?>

<?php include("ttt_functions.php"); ?>
<?php ?>

<table border="1" style="width:50%">
  <tr>
   	<td><form action="php-radio-data.php" method="post"><form action="" method="post"><input type="radio" name="A1" value="x">Choose X</form><form action="" method="post"><input type="radio" name="A1" value="o">Choose O</form><input type="submit" name="submit" value="Submit"></form></td>
    <td>2</td> 
    <td>3</td>
  </tr>
  <tr>
    <td>4</td>
    <td>5</td> 
    <td>6</td>
  </tr>
  <tr>
    <td>7</td>
    <td>8</td> 
    <td><form action="#" method="post">
	<select name="Choice">
	<option value="X">X</option>
	<option value="O">O</option>
	</select>
	<input type="submit" name="submit" value="Submit" />
	</form>
	<?php
	if(isset($_POST['submit'])){
	$selected_val = $_POST['Choice'];  
	echo "You have selected :" .$selected_val; ?>
	</td>
  </tr>
?>
</table>
</div>
</body>
</html>
