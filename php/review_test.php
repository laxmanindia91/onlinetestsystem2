<?php
include '../db/connect.php';
$id = $_REQUEST['id'];
//echo $id;
$sql = "select * from score_students where stud_id = '$id'";
$result = mysql_query($sql) or die(mysql_error());
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
  .btnbackreviewtest{
	margin-top:10px;  
  }
  </style>
<script>
  $(document).ready(function(){
	  $('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	
	$('.btnbackreviewtest').click(function(){
		//alert('a');
		$('#response_here').load('../php/result2.php');
	});

	
});
</script>
</head>
<body>
<div class="row">
<div class="col-sm-6 col-md-8 col-lg-10">
<button class="btn btn-primary pull-left btnbackreviewtest" data-offset-top="0">Back</button>
</div>
<div class="col-sm-6 col-md-8 col-lg-10">
<div class="affix-btn">
                    <button class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>

<h3>Test Question</h3>  
  <table class="table table-striped" id='tbl' width="200">
  
    <tbody>
      <tr>
        <td><b>Question</b></td>
        <td><b>Status</b></td>
		<!--td><b>Update Invoices</b></td-->
      </tr>
   
    <tbody>
	<?php
	while($row = mysql_fetch_array($result))
	{
		$qid = $row[3];
		$sql2 = "select * from questions where id = '$qid'";
		$result2 = mysql_query($sql2) or die(mysql_error());
		$values = mysql_fetch_object($result2);
		$quest = $values->question;
	?>
      <tr>
        <td><?php echo $quest; ?></td>
        <td><?php if($row[4] == 1 ) echo '<span class="glyphicon glyphicon-ok"></span> Correct'; if($row[5] == 1) echo '<span class="glyphicon glyphicon-remove"></span> Wrong'; ?></td>
        
      </tr>
	  <?php
	  }
	  mysql_close($con);
	?>
     
    </tbody>
  </table>
</div>
</div>

</body>
</html>

