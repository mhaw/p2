<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php 
	$numwords = 4;
	
	if(isset($_POST["number_words"])) {
		$numwords = $_POST["number_words"] + 0; 
		//add zero so value will not be undefined if no value entered by user

	}

	//if numwords was not entered default to 4
	if($numwords == 0) {
		$numwords = 4;
	}


	$words = file('data/words.txt');

	$sym = '';
	$num = '';
	
	if(isset($_POST["include_symbol"])) {
	$available_symbols = array('!', '@', '#', '$', '%', '&');
		shuffle($available_symbols);
		$sym = $available_symbols[0];
	}
	else $sym = '';

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

	$seperated_words = implode('-', $pass_words);

	if(isset($_POST["all_upper"])) {
		$seperated_words = strtoupper($seperated_words);
	}

	echo  $seperated_words.$num.$sym;
	
	}
	
	


 ?> 