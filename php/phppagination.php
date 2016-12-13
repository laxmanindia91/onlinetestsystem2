<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
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


</head>
<body>
<div id="content">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$query1=mysql_connect("localhost","root","");
mysql_select_db("ots_db",$query1);

$start=0;
$limit=1;

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}

$query=mysql_query("select * from questions LIMIT $start, $limit");

while($query2=mysql_fetch_array($query))
{
	$id1 = $query2[0];
?>
 
                                
                                
                                <div class="panel panel-default" id="ques1">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Question :</b> <?php echo $query2['question']; ?> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                
												<?php $sql2 = "select * from question_choices where question_id = '$id1' ";
	
													$result2 = mysql_query($sql2) or die(mysql_error());
													while($row = mysql_fetch_object($result2))
													{
											?>
												

												<div><span class="test-answer"><input type="checkbox" name="question[<?php echo $id ?>]" value="A"> <?php echo $row->choice1; ?></span></div>
												<div><span class="test-answer"><input type="checkbox" name="question[<?php echo $id ?>]" value="B"> <?php echo $row->choice2; ?></span></div>
												<div><span class="test-answer"><input type="checkbox" name="question[<?php echo $id ?>]" value="C"> <?php echo $row->choice3; ?></span></div>
												<div><span class="test-answer"><input type="checkbox" name="question[<?php echo $id ?>]" value="D"> <?php echo $row->choice4; ?></span></div>
												
												<?php } ?>
                                            </div>
                                            <!--div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div-->
                                        </div>
                                    </div>
                                </div>

<?php

	
}



$rows=mysql_num_rows(mysql_query("select * from questions"));
$total=ceil($rows/$limit);

if($id>1)
{
	echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
	echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}

/*echo "<ul class='page'>";
		for($i=1;$i<=$total;$i++)
		{
			if($i==$id) { echo "<li class='current'>".$i."</li>"; }
			
			else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
		}
echo "</ul>";*/
?>
</div>
</div>
</body>
</html>