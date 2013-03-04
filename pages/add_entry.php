<form class="form-horizontal" action="actions/add_contact.php" method="post">
	<div class="control-group">
	<label class="control-label" for="date"><strong>Date </strong></label>
		<input type="text" id="date_d" placeholder="dd">/
		<input type="text" id="date_m" placeholder="mm">/
		<input type="text" id="date_y" placeholder="year"><br/>
	</div>
	<div class="control-group">
	<label class="control-label" for="subject"><strong>Subject </strong>	</label>
<input name="subject" type="text" placeholder="Subject"> <br/>
	</div>
	<div class="control-group">
	<label class="control-label" for="entry"></label>
<input name="entry" type="text" placeholder="..."> <br/>
	</div>
<!-- 	<form action="upload_file.php" method="post" enctype=""> -->
<input class="btn btn-success" type="submit">

</form>