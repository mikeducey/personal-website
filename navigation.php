<DOCTYPE! html>
<html>
<div class="navigation">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="sidebar">
	<ul>
		<font size="1">
		<h1>Pages</h1>
		<font size="2">
  			<li><?php if ($thisPage=="Home") { echo "<b>Home</b>";} else { echo "<a href=\"http://mikeducey.omahacodeschool.com\">Home</a>"; } ?></li>
  			<li><?php if ($thisPage=="Goals") { echo "<b>Goals</b>";} else { echo "<a href=\"http://mikeducey.omahacodeschool.com/goals.php\">Goals</a>"; } ?></li>
  			<li><?php if ($thisPage=="Train") { echo "<b>Just look at this guy: George Francis Train!</b>";} else { echo "<a href=\"http://mikeducey.omahacodeschool.com/gftrain.php\">Just look at this guy: George Francis Train!</a>"; } ?></li>
  			<li><?php if ($thisPage=="Test Page") { echo "<b>Test Page</b>";} else { echo "<a href=\"http://mikeducey.omahacodeschool.com/testpage.php\">Test Page</a>"; } ?></li>
  		</font>
  		<font size="1">
  		<h1>Articles</h1>
  		</font>
		<font size="2">
			<li><?php if ($thisPage=="AI-Article") { echo "<b>Artificial Intelligence: Heading Towards \"Can Implies Ought\"?</b>";} else { echo "<a href=\"http://mikeducey.omahacodeschool.com/articles/article-on-ai.php\">Artificial Intelligence: Heading Towards &quotCan Implies Ought&quot?</a>"; } ?></li>
			<li><?php if ($thisPage=="Web As Medium") { echo "<b>The Web: The Ultimate Medium</b>";} else { echo "<a href=\"http://mikeducey.omahacodeschool.com/articles/web-as-medium.php\">The Web: The Ultimate Medium</a>"; } ?></li>
		<font size="1">
		<h1>My Profiles</h1>
		<font size="2">
			<li><a href="https://www.linkedin.com/in/michael-ducey-54077210a">LinkedIn</a></li>
			<li><a href="https://github.com/mikeducey/">GitHub</a></li>
		</font>
	</ul>
	</div>
</body>
</div>
</html>