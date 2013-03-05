<?php 

function add($entries){
	$date = date;
	$subject = subject;
	$story = story;
}


function dropdown($entries){
	$select = "<select name=\"$name\">";
	
	foreach($options as $value => $text) {
		// if there is session form data for $name, AND its value
		// is the same as the current array elemet, select it
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value){
			//unset ($_SESSION['POST'][$name]);
			$selected = 'selected="selected"';
		} else {
			$selected = '';
		}
		$select .= "<option $selected value=\"$value\">$text</option>";
	}
	
	$select .= "</select>";
	return $select;
}
