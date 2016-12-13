<?php
include '../db/connect.php';
$qid = $_REQUEST['id'];
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
  <script>
  $(document).ready(function(){
	  $('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	
	$('.btnupdate').click(function(){
		//alert('a' + <?php echo $qid; ?>);
		var questionval = $('.qdata').val();
		$.ajax({
			type:'POST',
			data: {'id': <?php echo $qid; ?> , 'qdata': questionval},
			url:'../php/question_update.php',
			success: function()
			{
				$('#response_here').load('../php/show_question_list.php');
			},
			error: function()
			{
				
			}
		});
	});
	$('.backquestionlist').click(function(){
		$("#response_here").load('../php/show_question_list.php');
	});
		
});
</script>
</head>
<body>

<div class="container-fluid">
<div class="row">
		<div class="col-md-2">
		<button type="button" class="btn pull-center backquestionlist" data-offset-top="0" style="margin-top:10px;margin-bottom:5px;">Back</button>
		</div>
		</div>
	<div class="row">
	<?php
		$sql = "select * from questions where id = '$qid'";
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_object($result);
		
	?>
		<div class="col-md-6 col-lg-4">
		Question:
		<textarea rows="4" cols="100" class="qdata"><?php echo $row->question; ?></textarea><div class="affix-btn">
		
                    <!--button type="button" class="btn pull-right closediv" data-offset-top="0">Close</button-->
</div>
		</div>
		
	</div>
	<div class="row">
	<div class="col-md-6 col-lg-4">
			<?php
			/*$sql2 = "select * from question_choices where id = '$qid'";
			$result = mysql_query($sql2) or die(mysql_error());
			while($row = mysql_fetch_array($result))
			{
			if ($row[3] != '')
			{
			?>
			<input type="text" value="<?php echo $row[3]; ?>">
			<?php
			}
			if ($row[4] != '')
			{
			?>
			<input type="text" value="<?php echo $row[4]; ?>">
			<?php
			}
			if ($row[5] != '')
			{
			?>
			<input type="text" value="<?php echo $row[5]; ?>">
			<?php
			}
			if ($row[6] != '')
			{
			?>
			<input type="text" value="<?php echo $row[6]; ?>">
			<?php
			}
			if ($row[7] != '')
			{
			?>
			<input type="text" value="<?php echo $row[7]; ?>">
			<?php
			}
			if ($row[8] != '')
			{
			?>
			<input type="text" value="<?php echo $row[8]; ?>">
			<?php
			}
			if ($row[9] != '')
			{
			?>
			<input type="text" value="<?php echo $row[9]; ?>">
			<?php
			}
			if ($row[10] != '')
			{
			?>
			<input type="text" value="<?php echo $row[10]; ?>">
			<?php
			}
			if ($row[11] != '')
			{
			?>
			<input type="text" value="<?php echo $row[11]; ?>">
			<?php
			}
			if ($row[12] != '')
			{
			?>
			<input type="text" value="<?php echo $row[12]; ?>">
			<?php
			}
			}*/
			?>
			<button type="submit" class="btn btn-primary btnupdate" style="margin-left:10px;">Update</button>
		</div>
	</div>
</div>
</body>
</html>