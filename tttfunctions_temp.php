<?php
	/*This is a function that prints a character on the board depending on the state of the game*/
	function printSquare($move, $box, $turn){
		if($move[$box]=="-"){
			$checkwinner = QueryStringCheck($move);
			$turn = changeturn($move);
			if($checkwinner=="xwins" or $checkwinner == "owins") {
				echo "-";	/*This makes sure no further moves can be entered after game is over.  This will have to check the new function when the new one is written! */	
			}
			else {
				$move[$box] = $turn;
				echo '<a href="ttt.php?move='.$move.'"><div class = "tttBox__linkColor">W</div></a>'; /* This allows the move that the link clicked will represent to concatenate onto the link */
			}
		}
		elseif($move[$box]=="x"){
			echo 'X';
		}
		elseif($move[$box]=="o"){
			echo 'O';
		}
	}	
	/*This function checks for winning query strings, and if not updates the turn */
	/*This seems to be pure method  but there is too much going on*/
	function QueryStringCheck($move){
		$winningCombinations = array("-","-","-","-","-","-","-","-");
		$winner = "none";
		$winningCombinations[0] = $move[0].$move[1].$move[2];
		$winningCombinations[1] = $move[0].$move[4].$move[8];
		$winningCombinations[2] = $move[0].$move[3].$move[6];
		$winningCombinations[3] = $move[1].$move[4].$move[7];
		$winningCombinations[4] = $move[2].$move[5].$move[8];
		$winningCombinations[5] = $move[2].$move[4].$move[6];
		$winningCombinations[6] = $move[3].$move[4].$move[5];
		$winningCombinations[7] = $move[6].$move[7].$move[8];
		foreach($winningCombinations as $wincondition){
			if($wincondition=="xxx"){
				$winner = "xwins";
			}
			elseif($wincondition=="ooo"){
				$winner = "owins";
			}
		}
		return $winner;
	}
	function checkForDraw($move) {
		$draw = "no";
		if (QueryStringCheck($move) == "none" and strpos($move, "-")===false){
			$draw = "draw";
		}
		return $draw;
	}
	function changeTurn($move) {
		for($i=0; $i<9; $i++){ 
			if($move[$i]=="x"){
				$X++;
			}
			elseif($move[$i]=="o"){
				$O++;
			}
		}
		if($O<$X){
			return "o"; /*This move will return "o" into query string for O's turn*/
		}
		else{
			return "x"; /*This move will return "x" into query string for X's turn*/
		}
	}

	/*This function updates the top bar (visually) with the state of the game: whose turn and who wins (if any) */
	/*This function is about modifying the view */
	function PrintBoardState($move){
		$winningmove = QueryStringCheck($move);
		$endgame = checkForDraw($move);
		$turn = changeTurn($move);
		if($winningmove=="xwins"){
			echo "X Wins!";
		}
		elseif($winningmove=="owins"){
			echo "O Wins!";
		}
		elseif($endgame=="draw"){
			echo "It's a Draw";
		}
		elseif($turn=="x"){
			echo "X's turn";  
		}
		elseif($turn=="o"){
			echo "O's turn";
		}
	}
	/*This function pops up a link when the game is done to play another game */
	/*A visual function that pops up a link to play the next game */
	function PlayAgain($move){
		$turn = QueryStringCheck($move); 
		$endgame = checkForDraw($move);
		if($turn=="xwins" or $turn == "owins" or $endgame == "draw"){
			echo "<div class = \"tttPlayAgain__Text\"><a class = \"tttPlayAgain__Text--AnchorTag\" href=\"ttt.php?move=---------\">New Game</a></div>";
			echo "<div class = \"tttPlayAgain__Text\"><a class = \"tttPlayAgain__Text--AnchorTag\" href=\"ttt.php?reset=true\">Reset Score</a></div>";
		}
	}
	/*this function prints X's score */
	function PrintXScore($move) {
 		if (QueryStringCheck($move) == "xwins") {
			$_SESSION["xwin"]++;
			return $_SESSION["xwin"];
		}
	}
	/*this function prints O's score */
	function PrintOScore($move) {
 		if (QueryStringCheck($move) == "owins") {
			$_SESSION["owin"]++;
			return $_SESSION["owin"];
		}
	}
	/*this function prints the total Draws */
	function PrintDraws($move) {
 		if (checkForDraw($move) == "draw") {
			$_SESSION["draw"]++;
			return $_SESSION["draw"];
		}
	}

?>