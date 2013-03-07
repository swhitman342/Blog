<?php 

function add($entries){
	$date = date;
	$subject = subject;
	$story = story;
}


function input($name, $placeholder, $id = null, $class = null, $value = null) {
	if($value == null && isset($_SESSION['POST'][$name])){
		$value = $_SESSION['POST'][$name];

		//remove from session data
		unset($_SESSION['POST'][$name]);
	}	

	$input = "<input name=\"$name\" class =\"$class\" id=\"$id\" placeholder=\"$placeholder\" value=\"$value\"/>";
	return $input;
}

function format_entry($table){
	
	$conn = new mysqli('localhost','root','','blog');

	$sql = "SELECT * FROM entries ";
	
	// Loop over result set, display contacts
	
	$results = $conn->query($sql);
	
	$entries = $results->fetch_assoc() ;
	
	extract($entries);
	
	(explode('-',$date));
	$year = $date['0'].$date['1'].$date['2'].$date['3'];
	

		$entry = "<tr><td><a id=$year><strong>$subject</strong><br/>$story.$entry_id</a></td></tr><br/>";
	
		return $entry;
}