<pre><label>2013</label></pre>

<table>
<tbody>


<?php
extract($_POST);

$conn = new mysqli('localhost','root','','blog');

$sql = "SELECT * FROM entries ORDER BY date,subject";

// Loop over result set, display contacts

$results = $conn->query($sql);

while(($entry = $results->fetch_assoc()) != null) {
	extract($entry);
	$date = explode('-',$date);
	//$year = $date['0'].$date['1'].$date['2'];
	$year = $date['0'];
	
	echo "<tr><td><a id=\"$year\"><strong>$subject</strong></td></tr><tr><td>$story</a></td></tr>";
	
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