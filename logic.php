<?php

// list of words
$words = ['apple','angel','acorn','applications','baseball','brown','bat',
'coffee','cat','car','cold','dog','dirt','dynamic','earth','funny','good',
'hello','horse','house','hockey','iris','jump','kill','kilt','lotus','lord',
'mouse','move','movie','orange','pie','purple','pumpkin','random','rock','rose',
'star','stay','strong','table','tennis','turtle','under','web','water','wine',
'yellow','zero','zebra'];

// list of symbols
$symbols = ['!','@','#','%','&','*','?'];


// check user submitted options

if (isset($_POST['count'])) {
	$count = $_POST['count'];
} else {
	$count = 4;
}

if (isset($_POST['uppercase'])) {
	$uppercase = true;
} else {
	$uppercase = false;
}

if (isset($_POST['symbol'])) {
	$symbol = true;
} else {
	$symbol = false;
}

if (isset($_POST['number'])) {
	$number = true;
} else {
	$number = false;
}

// array containing the generated words
$selected_words = [];


// generate password
for ($i = 0; $i < $count; $i++) {
	$rand = rand(0, count($words) -1 );
	$word = $words[$rand];
	array_push($selected_words, $word);
}

if ($uppercase) {

	foreach ($selected_words as $key => $value) {

		$selected_words[$key] = ucfirst($value);
	}
}

if ($symbol) {
	$rand = rand(0, count($symbols) -1);
	$sym = $symbols[$rand];
	array_push($selected_words, $sym);
}

if ($number) {
	$rand = rand(0, 9);
	array_push($selected_words, $rand);
}

// return password to index.php
$password = implode(" ", $selected_words);