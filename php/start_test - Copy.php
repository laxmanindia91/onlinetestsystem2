<?php
session_start();
include '../db/connect.php';
//error_reporting(0);
$student_id = $_SESSION['id'];
$cat = $_REQUEST['cat'];
$cat = strtoupper($cat);
//echo $cat;
echo 'student id-' .$student_id . ' ';
$timezone = new DateTimeZone(date_default_timezone_get());
$date = new DateTime('now', $timezone);

$sql = "select * from category where category_name = '$cat'";
$result = mysql_query($sql) or die(mysql_error());
$value = mysql_fetch_object($result);
$cat_id = $value->id;
//echo 'test category id-' . $cat_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	#content
{
	width: 900px;
	margin: 0 auto;
	font-family:Arial, Helvetica, sans-serif;
}
.page
{
float: right;
margin: 0;
padding: 0;
}
.page li
{
	list-style: none;
	display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
	font-weight:bold;
	color: #000;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 4PX;
display: block;
float: left;
}
</style>
<script>
$(document).ready(function(){
	$('.btntest').hide('fast');
	//$('form').delay(50000).submit();
	$('.submit_test').click(function(){
		//alert('submit test');
		
		var data = $("form").serialize();
			$.post("../php/submit_test.php?sid=" + <?php echo $student_id; ?> + '&testid=' + <?php echo $cat_id; ?>, data, function() {
			$('#response_here').empty();
			//$('form').reset();
			});
	});
});
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
</head>
<body oncontextmenu="return false">
<div id="content">
<div class="row">
<div class="col-md-3 col-lg-4 text-center">
<h2>Start Test</h2>
</div>
</div>
<div class="bs-example">
<div class="row">
<div class="col-md-3 col-lg-4">
<div class="panel panel-default">
                    <div class="panel-heading">Test Date & Time</div>
                    <div class="panel-body">
                        <?php  ?> 
                    </div>
                    
                </div>
</div>
    <div class="col-md-8 col-lg-8">
	<!--form action="submit_test.php" method="post" id="onlinetest"-->
	<form>
<?php
//pagination 
/*$start=0;
$limit=1;

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}*/
//pagination end
//$sql1 = "select * from questions order by RAND() LIMIT 30";
$sql1 = "SELECT t1.id,t1.question FROM questions t1 JOIN category t2 ON t2.id = t1.category_id WHERE t1.category_id = '$cat_id' order by RAND() LIMIT 20 ";
$result = mysql_query($sql1) or die(mysql_error());
//echo 'total ' . mysql_num_rows($result);
while($row = mysql_fetch_array($result))
{
$id = $row[0];	
?>	<div id="question_option" style="border:1px;">
	<div id="quest"><h4><?php echo $row[1]; echo '-' . $id; ?></h4></div>
	<div><input type="hidden" name="question[<?php echo $id ?>][]" value="<?php echo $id; ?>"></div>
    <div class="q_choice">
	<ul class="list-unstyled">
	<?php $sql2 = "select * from question_choices where question_id = '$id' ";
	
			$result2 = mysql_query($sql2) or die(mysql_error());
			while($row = mysql_fetch_object($result2))
			{
	?>
        <!--li><div><input type="radio" name="optradio" value="A"> <?php //echo $row->choice1; ?></div>
		<div><input type="radio" name="optradio" value="B"> <?php //echo $row->choice2; ?></div>
		<div><input type="radio" name="optradio" value="C"> <?php //echo $row->choice3; ?></div>
		<div><input type="radio" name="optradio" value="D"> <?php //echo $row->choice4; ?></div></li-->

        <li><div><input type="checkbox" name="question[<?php echo $id ?>]" value="A"> <?php echo $row->choice1; ?></div>
		<div><input type="checkbox" name="question[<?php echo $id ?>]" value="B"> <?php echo $row->choice2; ?></div>
		<div><input type="checkbox" name="question[<?php echo $id ?>]" value="C"> <?php echo $row->choice3; ?></div>
		<div><input type="checkbox" name="question[<?php echo $id ?>]" value="D"> <?php echo $row->choice4; ?></div></li>
        
	<?php } ?>
        
    </ul>
	</div>
	</div>
	<?php
	}
//pagination
	/*$rows=mysql_num_rows(mysql_query("select * from questions"));
$total=ceil($rows/$limit);

if($id)
{
	echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
	echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}*/
//pagination end
	mysql_close($con);
	?>
	<button type="button" class="btn btn-danger submit_test">Submit</button>
	<hr>
	<p><b>Note:</b> Don't click/press back button during test.</p>
	</form>
    </div>
	</div>
 
</div>
</div>
</body>
</html>                                		