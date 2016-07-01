<?php $thisPage="TTT"; ?>
<?php $title="Tic Tac Toe"; ?>
<?php include("topmain.php"); ?>
<?php include("ttt_functions.php"); ?>
<?php session_start(); ?>

<?php
    if($_GET["reset"]){
        $_SESSION=null;
    }
    if($_GET["move"]){
      $boardState = $_GET["move"];
    }
    else{
      $boardState = "---------";
    }
    $turn = QueryStringCheck($boardState);
?>
<div class = "tttWrapper">
  <div class = "tttTitle">
  <h1>
    <?php
      CurrentBoard($boardState);
    ?>
  </h1>
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
    <p><?php echo PrintScore($boardState)?></p>
    </div>
    <div class = "tttScoreBox__Line">
    <p> you stink </p>
    </div>
    <div class = "tttScoreBox__Line">
    <p> you stink </p>
    </div>

  </div> 
</div> <!-- this is the end div for ttt wrapper  -->

</div>
</body>
</html>
