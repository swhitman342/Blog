<pre>POST: <?php print_r($_POST)?></pre>
<?php

session_start();

$required = array (
		'date',
		'subject',
		'entry',
		);

extract($_POST);

foreach($required as $r) {
	if(!isset($_POST[$r]) || $_POST[$r] == '') {
		// store message into session

		$_SESSION['message'] = array (
				'type' => 'danger',
				'text' => 'Please Provide All Required Information.'
		);

		// store form data into session data
		$_SESSION['POST'] = $_POST;

		//set location header
		Header('location:../?p=add_entry');

		//kill script
		die();
	}else {
	
		$_SESSION['message'] = array(
				'type' => 'success',
				'text' => 'Entry Successfully Added'
		);

		//header('location:../?p=frontpage');
	}
}

$sql = "INSERT INTO entries(date,subject,entry) VALUES ('$date','$subject',$entry)";