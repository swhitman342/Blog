
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
<input type="hidden" name="date" value="3/12"/>
<button class="btn" type="submit">Submit</button>
</form>

<?php 

extract($_POST);

if ($_POST['comment'] != ''){
	
	$f = fopen('.\data\comments.csv','a');
	
	fwrite ($f,"\n{$_POST['comment']},{$_POST['date']}");
	
	fclose($f);
	//Header('Location:../final/?p=frontpage');

$i=0;

$lines = file('./data/comments.csv',FILE_IGNORE_NEW_LINES);

foreach ($lines as $line){
	$parts = explode(',',$line);
	$comment = $parts['0'];
	$date = $parts['1'];
	echo $date; echo "<div class=\"comment\">$comment</div>";
	echo "</br>";
}}


$i++;

?>



</div>