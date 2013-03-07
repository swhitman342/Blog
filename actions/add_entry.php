<pre>POST: <?php print_r($_POST)?></pre>
<?php

session_start();

$entries = array (
		'date',
		'subject',
		'story',
		);



foreach($entries as $r) {
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
extract($_POST);

$conn = new mysqli('localhost','root','','blog');

//$sql = "INSERT INTO entries (subject,entry) VALUES ('$subject',$entry)";
$sql = "INSERT INTO  `blog`.`entries` (
		`date` ,
		`subject` ,
		`story`
)
VALUES (
		'$date',  '$subject',  '$story'
)";


// query DB
$conn->query($sql);

// Close connection
$conn->close();