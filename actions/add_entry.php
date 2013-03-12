<pre>POST: <?php print_r($_POST)?></pre>
<?php

session_start();

$entries = array (
		'date',
		'subject',
		'story'
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
		header('location:../?p=add_entry');

		//kill script
		die();
	}else {
	
		$_SESSION['message'] = array(
				'type' => 'success',
				'text' => 'Entry Successfully Added'
		);

		header('location:../?p=past_entries');
	}
}
extract($_POST);



//$sql = "INSERT INTO entries (subject,entry) VALUES ('$subject',$entry)";
$sql = "INSERT INTO entries (
		date ,
		subject ,
		story
)
VALUES (
		'$date',  '$subject',  '$story'
)";
$conn = new mysqli('localhost','root','','blog');

// query DB
$conn->query($sql);

// check for a MySQL error
if($conn->errno >0){
	//put sql error into session
	$error = "<strong>MySQL Error # {$conn->errno}</strong>";
	$error .= "{$conn->error}<br/><strong>SQL:</strong>$sql";
	$_SESSION['message'] = array(
			'type'=> 'danger',
			'text' => $error
			);
	//set location header
	
	//kill script
	
	die();
	
}

// Close connection
$conn->close();