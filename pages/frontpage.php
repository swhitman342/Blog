<pre>POST: <?php print_r($_POST)?></pre>
<?php $i=0;
$i++;?>
<h3>Blog to entertain and journalize the lives of you and your friends.!!</h3>
<form method="post">
<input name="status" type="text" placeholder="What have you been up to?">
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" ></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" ></script>
<script>
		  $(document).ready(function() {
		    $("#datepicker").datepicker();
		  });
  	</script>
  	<br/>
   		 <?php echo input('date','Date','datepicker','datepicker.date.hasDatepicker')?>
<button type="submit" class="btn btn-info">Let it be known</button>
</form>
<?php 

extract($_POST);
$_POST['status'] = null;
if ($_POST['status'] && $_POST['status'] != ''){
	
	$f = fopen('.\data\status.csv','a');
	
	fwrite ($f,"\n{$_POST['status']},{$_POST['date']}");
	
	fclose($f);
	Header('Location:../final/?p=frontpage');
} else { $_POST['status'] = null;}

$i=0;

$lines = file('./data/status.csv',FILE_IGNORE_NEW_LINES);

foreach ($lines as $line){
	$parts = explode(',',$line);
	$status = $parts['0'];
	$date = $parts['1'];
	echo  $date; echo "<div class=\"status\">$status</div>";
	echo "</br>";
}


$i++;

?>

