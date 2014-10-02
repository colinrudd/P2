<?php require('logic.php'); ?>

<!doctype html>
<html lang="en">

<!--
Author: Colin Rudd
-->
<head>
 
	<title>xkcd Password Generator</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
</head>

<body>

	<h3>xkcd Password Generator</h3>
	<p>xkcd passwords use random words to create strong 
	passwords that are difficult to guess but easy to remember.</P>
	<p class='password'>Your password: <?=$password?></p>

	<form method="POST" action="index.php">
		<fieldset>
			<legend>Generate a Password</legend><br />
			<label for="count">Number of Words</label>
			<select name="count" id="count">
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
			</select><br />

			<label for="uppercase">Uppercase first letter?</label>
			<input type="checkbox" id="uppercase" name="uppercase" value="uppercase" /><br />

			<label for="symbol">Include a symbol?</label>
			<input type="checkbox" id="symbol" name="symbol" value="symbol" /><br />

			<label for="number">Include a number?</label>
			<input type="checkbox" id="number" name="number" value="number" /><br /><br />

			<input type="submit" name="submit" value="Generate"/>
		</fieldset>
	</form>
	<p>*For testing purposes only. Results may be insufficiently random.*</p>
	<img class="pure-img" src="images/xkcd.png" alt="xkcd" title="xkcd" />

</body>

</html>