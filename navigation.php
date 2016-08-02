	<div class="sidebar">
		<h1>Pages</h1>
		<ul>
  			<li><?php if ($thisPage=="Home") { echo "<b>Home</b>";} else { echo "<a href=\"/\">Home</a>"; } ?></li>
  			<li><?php if ($thisPage=="Goals") { echo "<b>Goals</b>";} else { echo "<a href=\"/goals.php\">Goals</a>"; } ?></li>
  			<li><?php if ($thisPage=="Train") { echo "<b>Just look at this guy: George Francis Train!</b>";} else { echo "<a href=\"/gftrain.php\">Just look at this guy: George Francis Train!</a>"; } ?></li>
  		</ul>
  		<h1>Articles</h1>
  		<ul>
			<li><?php if ($thisPage=="AI-Article") { echo "<b>Artificial Intelligence: Heading Towards \"Can Implies Ought\"?</b>";} else { echo "<a href=\"/articles/article-on-ai.php\">Artificial Intelligence: Heading Towards \"Can Implies Ought\"?</a>"; } ?></li>
			<li><?php if ($thisPage=="Web As Medium") { echo "<b>The Web: The Ultimate Medium</b>";} else { echo "<a href=\"/articles/web-as-medium.php\">The Web: The Ultimate Medium</a>"; } ?></li>
			<li><?php if ($thisPage=="href and include") { echo "<b>href and include()</b>";} else { echo "<a href=\"/articles/href-include.php\">href and include()</a>"; } ?></li>
			<li><?php if ($thisPage=="Html, Head, Body, and Soul") { echo "<b>Html, Head, Body, and Soul</b>";} else { echo "<a href=\"/articles/htmlheadbodysoul.php\">Html, Head, Body, and Soul</a>"; } ?></li>
			<li><?php if ($thisPage=="Day 1 of Tic Tac Toe") { echo "<b>Day 1 of Tic Tac Toe</b>";} else { echo "<a href=\"/articles/day1ttt.php\">Day 1 of Tic Tac Toe</a>"; } ?></li>
			<li><?php if ($thisPage=="Day 2 of Tic Tac Toe") { echo "<b>Day 2 of Tic Tac Toe</b>";} else { echo "<a href=\"/articles/day2ttt.php\">Day 2 of Tic Tac Toe</a>"; } ?></li>
			<li><?php if ($thisPage=="on_coding") { echo "<b>On Coding</b>";} else { echo "<a href=\"/articles/on-coding.php\">On Coding</a>"; } ?></li>
		</ul>
			<div class = "center">
			<form>
			<select name="theme">
				<option value="normal" <?php if($_GET["theme"] == "style") { ?> selected <?php } ?> >Normal</option>
				<option value="badtime" <?php if($_GET["theme"] == "badtime") { ?> selected <?php } ?> >Bad Time</option>
			</select>
			<input type="submit">
			</form>
			</div>
		<h1>Current Projects</h1>
		<ul>
			<li><?php if ($thisPage=="rps") { echo "<b>Rock/Paper/Scissors</b>";} else { echo "<a href=\"/rps/rps.php\">Rock/Paper/Scissors</a>"; } ?></li>
			<li><?php if ($thisPage=="movie-css") {echo "<b>CSS Example Work</b>";} else {echo "<a href=\"/movie-css/moviesiteindex.php\">CSS Example Work</a>";} ?></li>
			<li><?php if ($thisPage=="converter") {echo "<b>Unit Converter</b>";} else {echo "<a href=\"/converter/index.php\">Unit Converter</a>";} ?></li>
		</ul>
	</div>
