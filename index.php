<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light_Two' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <?php require 'logic.php' ?>
    <title>Sarah Cobb Project 2</title>
</head>
	<body>
		<pre>
			<?php
				print_r($_GET);
			?>
		</pre>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="row text-center">
						<h1>XKCD Password Generator</h1>
						<h2>Do you often forget your passwords and need to reset them?</h2>
						<p>In an effort to remember passwords, most people use a few variations of the same word with a few characters substituted by symbols or numbers... and still can't keep all the versions straight. This results in resetting passwords frequently, and periodically ending up with a nasty warning email with news that your accounts have been compromised and that you need to reset your password ASAP. It turns out, despite how difficult it is for <i>us</i> to remember those passwords, it is actually <i>easy</i> for a computer to crack them!</p>
						<p>XKCD, the web comic, proposed an alternate solution to these password problems. By using a long sequence of full words, rather than one word with several substitutions, the possible combinations are exponentially increased while improving the memorability of your password.</p>
					</div>
				</div>
				</div class="col-md-6">
					<h2>Generate Your XKCD Password</h2>
					<form method="GET" action="index.php">
						<label name="numWords">How many words should be included?</label>
						<select name="numWords">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select><br>
						<label name="capitalize" value="All lower case letters.">Would you prefer your words capitalized, all lower case, or all upper case?</label><br>
						<input name="case" type="radio" value="Capitalize each word.">Capitalize each word.<br>
						<input name="case" type="radio" value="All upper case letters.">All upper case letters.<br>
						<input name="case" type="radio" value="All lower case letters.">All lower case letters.<br>
						<label name="seperator" value="Surprise me!">What character should separate your words?</label></br>
						<input name="seperator" type="radio" value="~">~<br>
						<input name="seperator" type="radio" value="*">*<br>
						<input name="seperator" type="radio" value="-">-<br>
						<input name="seperator" type="radio" value="+">+<br>
						<input name="seperator" type="radio" value="Surprise me!">Surprise me!<br>
						<input name="includeNum" type="checkbox">Include a number at the end of my password.<br>
						<input name="includeSym" type="checkbox">Include a symbol at the end of my password.<br>
						<input type="submit" name="Generate Password" value="Generate Password">
					</form>
					<h3>Password: </h3><p class="password"><?=$password?></p>
					<p>Need to start over? </p><a href="index.php">Click here!</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row text-center">
						<a class="image" href="http://xkcd.com/936/"><img alt="xkcd password comic" src="http://imgs.xkcd.com/comics/password_strength.png"></a>
					</div>		
				</div>
			</div>
		</div>
	</body>
</html>
