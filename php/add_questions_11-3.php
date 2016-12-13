<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script>
  $(document).ready(function(){
	$('.addquest').click(function(){
		var quest = $('#question').val();
		var cat = $("#cat_question option:selected").val();
		var opt1 = $('#option1').val();
		var opt2 = $('#option2').val();
		var opt3 = $('#option3').val();
		var opt4 = $('#option4').val();
		var ans = $('#answer').val();
		var level = $('#cat_level').val();
		//console.log(quest + cat + opt1 + opt2 + opt3 + opt4 + ans);
		//alert(quest + cat);
		$.post("../php/submit_question.php" , {'question': quest,'category': cat,'opt1':opt1,'opt2':opt2,'opt3':opt3,'opt4':opt4, 'ans':ans,'level':level});
		$('#question_form')[0].reset();
	});
  });
  </script>
</head>
<body>

<div class="container">
  <h3> Add Question</h3>
  <div class="row">
  
  <form id="question_form">
   <div class="col-md-6">
   <div class="input-group">Question:
    <textarea class="form-control" rows="4" cols="100" name="question" id="question"></textarea>     
   </div>
     <div class="input-group">Option A:
    <textarea class="form-control" rows="3" cols="80" name="option1" id="option1"></textarea>     
   </div>
   <div class="input-group">Option B:
    <textarea class="form-control" rows="3" cols="80" name="option2" id="option2"></textarea>     
   </div>
   <div class="input-group">Option C:
    <textarea class="form-control" rows="3" cols="80" name="option3" id="option3"></textarea>     
   </div>
   <div class="input-group">Option D:
    <textarea class="form-control" rows="3" cols="80" name="option4" id="option4"></textarea>     
   </div>
   </div>
   
   <div class="col-md-6">
   
   
   <select class="selectpicker pull-center" id="cat_question" name="question_cat">
   <option value="" selected>Select Category</option>
   <?php
	$sql = "select * from category";
	//$con2->query($query);
	$result=mysql_query($sql);
	while ($row = mysql_fetch_array($result))
	{
   ?>
   
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>

  <?php
	}
	//$con2->close();
  ?>
  </select>
  
  <select class="selectpicker pull-center" id="cat_level" name="question_level">
   <option value="" selected>Select Level</option>
   <option value="easy">Easy</option>
   <option value="medium">Medium</option>
   <option value="tough">Tough</option>
</select>
   <div class="input-group">Answer:
    <textarea class="form-control" rows="2" cols="80" name="answer" id="answer"></textarea>     
   </div>
   <br>
    <button type="button" class="btn btn-default addquest">Submit</button>
	</div>
  </form>
  </div>

</div>

</body>
</html>

