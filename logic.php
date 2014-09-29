<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php 
	$numwords = 4;
	$separator = ' ';
	
	if(isset($_POST["number_words"])) {
		$numwords = $_POST["number_words"] + 0; 
		//add zero so value will not be undefined if no value entered by user

	}

	//if numwords was not entered default to 4
	if($numwords == 0) {
		$numwords = 4;
	}

	//generate word array
	$words = file('data/words.txt');

	$sym = '';
	$num = '';

	//logic to customize separator type
	if(isset($_POST["septype"])) {
		$septype = $_POST["septype"];

		if($septype == 'hypen'){
			$separator = '-';
		}
		if($septype == 'underscore') {
			$separator = '_';
		}
		if($septype == 'space') { 
			$separator = ' ';
		}
	}

	//logic to pick and insert random symbol
	if(isset($_POST["include_symbol"])) {
	$available_symbols = array('!', '@', '#', '$', '%', '&');
		shuffle($available_symbols);
		$sym = $available_symbols[0];
	}
	else $sym = '';

	//insert a number from 
	if(isset($_POST["include_number"])) {
		$num = rand(0,9);
	}
	else $num = '';

	if($numwords > 20) {
		echo "Please enter a number between 1 and 20";
	} else {

	for ($i=0; $i < $numwords; $i++) { 
	 $rand_num = rand(0, count($words)-1);
	 $pass_words[$i] = rtrim($words[$rand_num]);
	}

	$seperated_words = implode($separator, $pass_words);

	if(isset($_POST["all_upper"])) {
		$seperated_words = strtoupper($seperated_words);
	}

	echo  $seperated_words.$num.$sym;
	
	}
	
	


 ?> 