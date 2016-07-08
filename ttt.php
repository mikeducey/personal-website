<?php session_start(); ?>
<?php $thisPage="TTT"; ?>
<?php $title="Tic Tac Toe"; ?>
<?php include("topmain.php"); ?>
<?php include("tttfunctions_temp.php"); ?>

<?php
    if($_GET["reset"]){
        session_destroy();
    }
    if($_GET["move"]){
      $boardState = $_GET["move"];
    }
    else{
      $boardState = "---------";
    }
    $turn = QueryStringCheck($boardState);
    sessionTracker()
?>
<div class = "tttWrapper">
  <div class = "tttTitle">
    <?php PrintBoardState($boardState); ?>
  </div>
  <div class = "tttRow">
    <div class = "tttBox">
      <?php printSquare($boardState, 0, $turn); ?>
    </div>
    <div class = "tttBox">
      <?php printSquare($boardState, 1, $turn); ?>
    </div>
    <div class = "tttBox">
      <?php printSquare($boardState, 2, $turn); ?>
    </div>
  </div>
  <div class = "tttRow">
    <div class = "tttBox">
      <?php printSquare($boardState, 3, $turn); ?>
    </div>
    <div class = "tttBox">
      <?php printSquare($boardState, 4, $turn); ?>
    </div>
    <div class = "tttBox">
      <?php printSquare($boardState, 5, $turn); ?>
    </div>
  </div>
  <div class = "tttRow">
    <div class = "tttBox">
      <?php printSquare($boardState, 6, $turn); ?>
    </div>
    <div class = "tttBox">
      <?php printSquare($boardState, 7, $turn); ?>
    </div>
    <div class = "tttBox">
      <?php printSquare($boardState, 8, $turn); ?>
    </div>
  </div>
    <div class = "tttPlayAgain">
      <?php PlayAgain($boardState); ?>
    </div>
  <div class = "tttScoreBox">
    <div class = "tttScoreBox__Line">
      <p>Player X Score: <?php printXScore() ?></p>
    </div>
    <div class = "tttScoreBox__Line">
      <p>Player O Score: <?php printOScore() ?></p>
    </div>
    <div class = "tttScoreBox__Line">
      <p>Draws: <?php echo PrintDraws($boardState)?></p>
    </div>
  </div> 
</div> <!-- this is the end div for ttt wrapper  -->

</div>
</body>
</html>
