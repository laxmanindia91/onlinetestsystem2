<?php
if(isset($_REQUEST['submit'])){
	$field_values_array = $_REQUEST['choice_name'];
	
	print '<pre>';
	print_r($field_values_array);
	print '</pre>';
	
	foreach($field_values_array as $value){
		//your database query goes here
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add more fields using jQuery</title>
<script src="../js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 10; //Input fields increment limitation
	var addButton = $('.add_button'); //Add button selector
	var wrapper = $('.field_wrapper'); //Input field wrapper
	var fieldHTML = '<div><input type="text" name="choice_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="../images/remove-icon.png"/></a></div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<style type="text/css">
input[type="text"]{height:20px; vertical-align:top;}
.field_wrapper div{ margin-bottom:10px;}
.add_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
.remove_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
		<div class="panel panel-default">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">Panel Content</div>
</div>

</div>
					<div class="col-sm-4">
											<form name="codexworld_frm" action="" method="post">
											<div class="field_wrapper">
											<div class="input-group">Question:
											<textarea class="form-control" rows="4" cols="100" name="question" id="question"></textarea>     
										   </div>
												<div>
													<input type="text" name="choice_name[]" value=""/>
													<a href="javascript:void(0);" class="add_button" title="Add field"><img src="../images/add-icon.png"/></a>
												</div>

												</div>

											<!--input type="submit" name="submit" value="SUBMIT"/-->
											<button type="submit" name="submit" class="btn btn-info">Submit</button>
											</form>
					</div>
</div>
</div>
</body>
</html>
