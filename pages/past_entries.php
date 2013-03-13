<pre><label><strong>2013</strong></label></pre>


<table class="table">

<thead><tr><th>Subject</th><th>Story</th></tr></thead>
<tbody>
<?php
extract($_POST);

$conn = new mysqli('localhost','root','','blog');

$sql = "SELECT entries.*, COUNT(comment_id) AS
num_comments FROM entries LEFT JOIN comments ON
entries.entry_id=comments.entry_id GROUP BY
entries.entry_id ORDER BY num_comments DESC, story";

// Loop over result set, display contacts

$results = $conn->query($sql);

while(($entry = $results->fetch_assoc()) != null) {
	extract($entry);
	$date = explode('-',$date);
	//$year = $date['0'].$date['1'].$date['2'];
	$year = $date['0'];
	
	echo "<tr class=\"past_story_tr\"><td><a class=\"past_story\"href=\"./?p=view_story&id=$entry_id\" id=\"$year\"><strong>$subject</strong></td><td class=\"comments\">Comments:$num_comments</td><td>$story</a></td></tr>";
	
}

$conn->close();
?>

	</tbody>
</table>
<!-- <pre><label>...2012</label></pre>
	<?php echo format_entry($subject);?>
<pre><label>...2011</label></pre>
	<?php echo format_entry($subject);?>
<pre><label>...2010</label></pre>
	<?php echo format_entry($subject); ?> -->
<pre><label>All older stories...</label></pre>