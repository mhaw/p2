<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php 

	
	$numwords = $_POST["number_words"];
	$words = file('data/words.txt');
	

	if(isset($_POST["include_symbol"])) {
	$available_symbols = array('!', '@', '#', '$', '%', '&');
		shuffle($available_symbols);
		$sym = $available_symbols[0];
	}

	if(isset($_POST["include_number"])) {
		$num = rand(0,9);
	}

	for ($i=0; $i < $numwords-1 ; $i++) { 
	 $rand_num = rand(0, count($words)-1);
	 $pass_words[$i] = rtrim($words[$rand_num]);
	}

	$seperated_words = implode('-', $pass_words);

	// for testing
	echo $numwords;
	echo '<br>';
	echo $sym;
	echo '<br>';
	echo $num;
	echo '<br>';
	echo $seperated_words;


 ?> 