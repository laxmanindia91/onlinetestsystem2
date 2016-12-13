<?php
session_start();
include '../db/connect.php';
$id = $_GET['id'];
//$rgn = $_SESSION['region'];
/*echo $id;
echo $rgn;*/
//die();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Invoice Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
 <style>
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
</style>
<script>
$(document).ready(function(){
	$('#backinvdisplay').click(function(){
	$('#response_here').load('../php/add_schedule.php');	
	});
	
	$("input[type='text']").change(function(){
		//alert('a');
		//var discount  = $(this).val();
		//$.post("../php/update_invoice_disocunt.php" , {'id':<?php echo $id; ?>, 'discount': discount});
	});
	$("input[type='checkbox']").click(function(){
		var val = $(this).val();
		//var discount = $('#discount').val();
		//$.post("../php/user_invoice_no_change.php" , {'id': <?php echo $id; ?>, 'changeval':val});
	});
	
	$('.scheduledtest').click(function()
	{	
		var dt = $('#dateval').val();
		var tm = $('#timeval').val();
		//alert('test');
		//$.post("../php/update_student_test.php" , {'id':<?php echo $id; ?> , 'dt':dt , 'tm':tm});
		$.ajax({
			type:'POST',
			data: {'id':<?php echo $id; ?> , 'dt':dt , 'tm':tm},
			url: '../php/update_student_test.php',
			success: function(response)
			{
				$('$response_here').load('../php/add_schedule.php');
			},
			error: function()
			{
					$('$response_here').text(response);
			}
		});
	});
	
});
</script>
</head>
<body>1
<?php
/*foreach ($ids as $value) {
    //echo "Key: $key; Value: $value\n";
	//echo $value;
	$tmp[]=$value;

}
//print_r($tmp);
$tmpjoin = implode(",",$tmp);*/

$sql = "select * from students where id = '$id'";
$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_object($result);
//$orderids = $row->orderids;
//$tmpjoin = explode(",",$orderids);
$dt = $row->date1;
$tm = $row->time1;
//$ischange = $row->isChange;

//print_r($tmpjoin);
//echo '<br>size ' . $arrlen = count($tmpjoin);
/*foreach ($tmpjoin as $value) {
    //echo "Key: $key; Value: $value\n";
	echo'<br>'. $value;
}*/
?>
<div class="panel-body">
                
			
<!-- Simple Invoice - START -->

    <div class="row">
        <div class="col-xs-12">
            <div class="text-center"><a href='#' id='backinvdisplay'><strong>Back</strong></a>
                <!--i class="fa fa-search-plus pull-left icon"></i-->
                <!--h2>Invoice for purchase #33221</h2-->
				<h3>Schedule Test for Student</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-5 col-lg-5 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Student Details</div>
                        <div class="panel-body">
                            <strong><?php echo $row->username; ?></strong><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Test Information</div>
                        <div class="panel-body">
                            <strong>Test Name:</strong> test<br>
                            <strong>Exp Date:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Schedule summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td class="text-center"><strong>Test Date</strong></td>
                                    <td class="text-center"><strong>Test Time</strong></td>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
							
                                <tr>
                                    <td align="center"><input type="date" name="dt" id="dateval" value="<?php echo $dt; ?>"></td>
                                    <td align="center"><input type="time" name="tm" id="timeval" value="<?php echo $tm; ?>"></td>
                                                                     
                                </tr>

								<tr>
								<td colspan='5' align='center'>
								
								<a href="#" class="btn btn-success scheduledtest"> Schedule Test</a></td></tr>
								
								
								
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- Simple Invoice - END -->
</div>
</body>
</html>