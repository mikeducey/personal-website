	<div class="sidebar">
		<h1>Pages</h1>
		<ul>
  			<li><?php if ($thisPage=="Home") { echo "<b>Home</b>";} else { echo "<a href=\"/\">Home</a>"; } ?></li>
  			<li><?php if ($thisPage=="Goals") { echo "<b>Goals</b>";} else { echo "<a href=\"/goals.php\">Goals</a>"; } ?></li>
  			<li><?php if ($thisPage=="Train") { echo "<b>Just look at this guy: George Francis Train!</b>";} else { echo "<a href=\"/gftrain.php\">Just look at this guy: George Francis Train!</a>"; } ?></li>
  			<li><?php if ($thisPage=="Test Page") { echo "<b>Test Page</b>";} else { echo "<a href=\"/testpage.php\">Test Page</a>"; } ?></li>
  		</ul>
  		<h1>Articles</h1>
  		<ul>
			<li><?php if ($thisPage=="AI-Article") { echo "<b>Artificial Intelligence: Heading Towards \"Can Implies Ought\"?</b>";} else { echo "<a href=\"/articles/article-on-ai.php\">Artificial Intelligence: Heading Towards \"Can Implies Ought\"?</a>"; } ?></li>
			<li><?php if ($thisPage=="Web As Medium") { echo "<b>The Web: The Ultimate Medium</b>";} else { echo "<a href=\"/articles/web-as-medium.php\">The Web: The Ultimate Medium</a>"; } ?></li>
		</ul>
		<h1>Current Projects</h1>
		<ul>
			<li><?php if ($thisPage=="rps") { echo "<b>Rock/Paper/Scissors</b>";} else { echo "<a href=\"/rps/rps.php\">Rock/Paper/Scissors</a>"; } ?></li>
		</ul>
	</div>
