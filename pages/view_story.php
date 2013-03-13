
<div class="view_story">
<?php
extract($_POST);

$conn = new mysqli('localhost','root','','blog');

$sql = "SELECT * FROM entries WHERE entry_id={$_GET['id']} ORDER BY date,subject";

// Loop over result set, display contacts

$results = $conn->query($sql);

while(($entry = $results->fetch_assoc()) != null) {
	extract($entry);
	$date = explode('-',$date);
	//$year = $date['0'].$date['1'].$date['2'];
	$year = $date['0'];

	echo "<a class=\"story_view\"><strong>$subject</a></strong></br>$story";

}
$conn->close();

?></div><div class="control-group">
<br/>
</div><div class="control-group"><form method="post">
<input name="comment" type="text" placeholder="What do you think?"/>
<button class="btn" type="submit">Submit</button>
</form>
<?php 
extract($_POST);
extract($_GET);

$conn = new mysqli('localhost','root','','blog');

$sql = "INSERT INTO comments (comment,entry_id) VALUES ($comment,$entry_id)";

$results = $conn->query($sql);

while(($comment = $results->fetch_assoc()) != null){
	extract($comment);
	echo "<div class=\"control-group\">$comment</div>";
}
	?>
	
<?php 

$conn = new mysqli('localhost','root','','blog');

$sql = "SELECT * FROM comments WHERE entry_id={$_GET['id']}";

$results = $conn->query($sql);

while(($comment = $results->fetch_assoc()) != null){
	extract($comment);
	echo "<div class=\"control-group\">$comment</div>";
}
	

?>



</div>