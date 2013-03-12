<!-- <pre>POST: <?php print_r($_POST)?></pre> -->
<?php $i=0;
$i++;?>
<h3>Blog to entertain and journalize the lives of you and your friends.!!</h3>
<form method="post">
<input name="status" type="text" placeholder="What have you been up to?">
<input type="hidden" name="date" value="3/12">
<button type="submit" class="btn btn-info">Let it be known</button>
</form>
<?php 

extract($_POST);

if ($_POST['status'] != ''){
	
	$f = fopen('.\data\status.csv','a'	);
	
	fwrite ($f,"\n{$_POST['status']},{$_POST['date']}");
	
	fclose($f);
	//Header('Location:../final/?p=frontpage');
}
$i=0;

$lines = file('./data/status.csv',FILE_IGNORE_NEW_LINES);

foreach ($lines as $line){
	$parts = explode(',',$line);
	$status = $parts['0'];
	$date = $parts['1'];
	echo $date; echo "<div class=\"status\">$status</div>";
	echo "</br>";
}


$i++;

?>

