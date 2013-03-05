<form class="form-horizontal" action="actions/add_entry.php" method="post">
	<div class="control-group">
	  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" ></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" ></script>
	  <script>
		  $(document).ready(function() {
		    $("#datepicker").datepicker();
		  });
  	</script>
   		 <input name="date" class="date" id="datepicker" placeholder="Date"/>
	</div> 
	<div class="control-group">

<input name="subject" type="text" placeholder="Subject"> <br/>
	</div>
	<div class="control-group">
	<label class="control-label" for="entry"></label>
<textarea name="entry" class="entry" placeholder="..."></textarea> <br/>
	</div>
<!-- 	<form action="upload_file.php" method="post" enctype=""> -->
	<div class="control-group">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>