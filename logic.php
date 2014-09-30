<?php

# $_GET['numWords'] = number of words to use in the password
# $_GET['seperator'] = which seperator character to use
# $_GET['includeNum'] = boolean, whether to include a number
# $_GET['includeSym'] = boolean, whether to include a symbol
# $_GET['case'] = boolean, whether to capitalize the words

# global variables
$password = '';
$newPassword = '';
$number = '';
$symbol = '';
$seperator = '';

# generate dictionary from file
$dictionary = file('dictionary.txt');

# generate numerical array
$numbers = array(0,1,2,3,4,5,6,7,8,9);

# generate symbol array
$symbols = array('~','!','?','@','#','$','%','^','&','*','+','=','<','>');

# generate seperator array
$seperators = array('~','*','-','+');

# update password 
function updatePassword () {
	global $password;
	global $newPassword;
	$password = str_replace($password, $password, $newPassword);
	return $password;
}

# set seperator value
if ($_GET['seperator'] == 'Surprise me!') {
	$seperator = $seperators[rand(0, count($seperators) - 1)];
} else {
	$seperator = $_GET['seperator']; 
}

# loop through dictionary and add words to password
for ($i = 0; $i < $_GET['numWords']; $i++) {
	# extract new word from dictionary
	$newWord = $dictionary[rand(0, count($dictionary) - 1)];
	# capitalize word if required
	if ($_GET['case'] == 'Capitalize each word.') {
		$newWord = ucwords($newWord);
	} elseif ($_GET['case'] == 'All upper case letters.') {
		$newWord = strtoupper($newWord);
	} else {
		$newWord = strtolower($newWord);
	}
	# check for null password
	if ($password == '') {
		$newPassword = $newWord;
		updatePassword();
	} else {
		# add seperator and new word to existing password;
		$newPassword = $password.$seperator.$newWord;
		# update password
		updatePassword();
	}
}

# add number if required
if ($_GET['includeNum'] == 'yes') {
	$number = $numbers[rand(0, count($number) - 1)];
	$newPassword = $password . $number;
	updatePassword();
}

# add symbol if required
if ($_GET['includeSym'] == 'yes') {
	$symbol = $symbols[rand(0, count($symbols) - 1)];
	$newPassword = $password . $symbol;
	updatePassword();
}

# strip whitespace from password
$password = preg_replace('/\s+/','',$password);