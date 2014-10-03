<?php

# global variables
$password = '';
$newPassword = '';
$number = '';
$symbol = '';
$separator = '';

# generate dictionary from file
$dictionary = file('http://wortschatz.uni-leipzig.de/Papers/top10000en.txt');

# generate numerical array
$numbers = array(1,2,3,4,5,6,7,8,9);

# generate symbol array
$symbols = array('~','!','?','@','#','$','%','&','*','+','=');

# generate separator array
$separators = array('~','*','-','+');

# update password 
function updatePassword () {
	global $password;
	global $newPassword;
	$password = str_replace($password, $password, $newPassword);
	return $password;
}

# set separator value
if ($_POST['separator'] == 'Surprise me!') {
	$separator = $separators[rand(0, count($separators) - 1)];
} else {
	$separator = $_POST['separator']; 
}

# loop through dictionary and add words to password
for ($i = 0; $i < $_POST['numWords']; $i++) {
	# extract new word from dictionary
	$newWord = $dictionary[rand(0, count($dictionary) - 1)];
	# capitalize word if required
	if ($_POST['letterCase'] == 'Capitalize each word.') {
		$newWord = ucwords($newWord);
	} elseif ($_POST['letterCase'] == 'All upper case letters.') {
		$newWord = strtoupper($newWord);
	} else {
		$newWord = strtolower($newWord);
	}
	# check for null password
	if ($password == '') {
		$newPassword = $newWord;
		updatePassword();
	} else {
		# add separator and new word to existing password;
		$newPassword = $password . $separator . $newWord;
		# update password
		updatePassword();
	}
}

# add number if required
if ($_POST['includeNum'] == 'yes') {
	$number = $numbers[rand(0, count($number) - 1)];
	$newPassword = $password . $number;
	updatePassword();
} 

# add symbol if required
if ($_POST['includeSym'] == 'yes') {
	$symbol = $symbols[rand(0, count($symbols) - 1)];
	$newPassword = $password . $symbol;
	updatePassword();
}

# strip new lines from password
$password = preg_replace('/\s+/','',$password);