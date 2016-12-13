<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script>
$(document).ready(function()
{
	$('.addcat').click(function(){
		var cat = $('#category').val();
		if(cat!='')
		{
		alert(cat);
		$.post("../php/submit_category.php" , {'cat':cat});
		$('#category').val('');
		$('#response_here').empty();
		}
		else
		{return;}
	});
});
</script> 
</head>
<body>

<div class="container">
  <h2>Add Category</h2>
   <div class="row">
  
  <form id="question_form" autocomplete="off">
   <div class="col-md-6">
    <div class="form-group">
      <label for="category">Category:</label>
      <input type="text" class="form-control" name="category" id="category" placeholder="Enter category" size="30" required="required">
    </div>
    
   
     <button type="button" class="btn btn-primary addcat">Submit</button>
	 </div>
  </form>
  </div>
</div>

</body>
</html>

