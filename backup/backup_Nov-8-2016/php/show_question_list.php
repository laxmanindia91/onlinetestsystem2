<?php
//session_start();
include '../db/connect.php';
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <style>
  span{
	  margin: 10px 10px;
	  height: 14px;
  }
  </style>
<script>
  $(document).ready(function(){
	  $('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	$("#tbl").on('click', '#btnUpdateQuestion', function () {
		
		var id1 = $(this).closest('tr').find('#dd').val();
		
		//alert(id1);
		//$(this).closest('tr').remove();
		var url_to_load = "../php/update_question.php?id="+id1;
		//alert(url_to_load);
		$("#response_here").load(url_to_load);
	});
	
	$('.previousQuestList').click(function()
	{
		alert('p');
	});
	$('.nextQuestList').click(function()
	{
		alert('n');
	});
	
});
</script>
</head>
<body>
<div class="row">
<div class="col-sm-6 col-md-8 col-lg-10">
<div class="affix-btn">
                    <button type="button" class="btn pull-right closediv" data-offset-top="0">Close</button>
</div>

<h3>Questions</h3>  
  <table class="table table-striped" id='tbl'>
    <tbody>
      <tr>
        <td><b>Name</b></td><td><b>Category</b></td><td class="pull-center"><b>Update</b></td>
      </tr>
   
    <tbody>
	<?php
	$start = 0;
	$limit = 10;
	$sql = "select * from questions";
	$result = mysql_query($sql) or die(mysql_error());

	while($row = mysql_fetch_array($result))
	{
	?>
      <tr>
        <td><input type='hidden' id='dd' value="<?php echo $row[0]; ?> "><?php echo $row[1]; ?></td>
		<td>
		<?php
		$cat_id = $row[2];
		$sql2 = "select category_name from category where id='$cat_id'";
		$result2 = mysql_query($sql2) or die(mysql_error());
			$values = mysql_fetch_object($result2);
			$cat_name = ucwords($values->category_name);
			echo $cat_name;
		?>
		</td>
		<td><button type="button" class="btn btn-info btnregionalinvoice" id="btnUpdateQuestion">Update</button></td>
      </tr>
	  <?php
	  }
	  ?>
	  <tr>
	  <td colspan="2">
	  <?php
	  $rows=mysql_num_rows(mysql_query("select * from questions"));
		$total=ceil($rows/$limit);

		
			echo "<div><span class='glyphicon glyphicon-circle-arrow-left previousQuestList'></span>";
			echo "<span class='glyphicon glyphicon-circle-arrow-right nextQuestList'></span></div>";
		
	?>
	</td></tr>
     
    </tbody>
  </table>
</div>
</div>
</body>
</html>

