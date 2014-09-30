<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   	<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <?php require 'logic.php' ?>
    <title>Sarah Cobb Project 2</title>
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row text-center">
						<h1>XKCD Password Generator</h1>
						<div class="password"><p class="password">Your password is ... <?=$password?></p></div>
						<h2>Do you often forget your passwords and need to reset them?</h2>
						<p>In an effort to remember passwords, most people use a few variations of the same word with a few characters substituted by symbols or numbers... and still can't keep all the versions straight. This results in resetting passwords frequently, and periodically ending up with a nasty warning email with news that your accounts have been compromised and that you need to reset your password ASAP. It turns out, despite how difficult it is for <i>us</i> to remember those passwords, it is actually <i>easy</i> for a computer to crack them!</p>
						<p>XKCD, the web comic, proposed an alternate solution to these password problems. By using a long sequence of full words, rather than one word with several substitutions, the possible combinations are exponentially increased while improving the memorability of your password.</p>
						<a class="image" href="http://xkcd.com/936/"><img class="img-responsive" alt="xkcd password comic" src="http://imgs.xkcd.com/comics/password_strength.png"></a>
					</div>
				</div>
				<div class="col-md-4">
					<h2 class="generate">Generate Your XKCD Password</h2>
					<form method="GET" name="generator" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
						<label>How many words should be included?</label><br>
						<select name="numWords">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select><br><br>
						<label>Would you prefer your words capitalized, all lower case, or all upper case?</label><br>
						<input name="case" type="radio" value="Capitalize each word.">Capitalize each word.<br>
						<input name="case" type="radio" value="All upper case letters.">All upper case letters.<br>
						<input name="case" type="radio" value="All lower case letters.">All lower case letters.<br><br>
						<label>What character should separate your words?</label><br>
						<input name="seperator" type="radio" value="~">~<br>
						<input name="seperator" type="radio" value="*">*<br>
						<input name="seperator" type="radio" value="-">-<br>
						<input name="seperator" type="radio" value="+">+<br>
						<input name="seperator" type="radio" value="Surprise me!">Surprise me!<br><br>
						<label>Include a number and/or symbol at the end of your password?</label><br>
						<input name="includeNum" type="checkbox" value="yes">Include a number<br>
						<input name="includeSym" type="checkbox" value="yes">Include a symbol<br>
						<input type="submit" name="Generate Password" value="Generate Password">
						<input type="button" id="reset" value="RESET">
					</form>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="validation.js"></script>
	</body>
</html>
