<?php session_start(); ?>
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
    $turn = checkWinConditions($boardState);
    sessionTracker()
?>
<?php
    $boardState = "x--ox--ox";
    checkWinConditions($boardState);
    
    if (updateWinCounts($boardState) == "banana") {
        echo "yay";
    }
    else {
        echo "noooooo";
    }
  ?>

