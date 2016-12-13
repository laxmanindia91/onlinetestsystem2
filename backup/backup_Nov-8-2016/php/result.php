<?php
session_start();
include '../db/connect.php';
$id = $_SESSION['id'];
$sql = "select * from score_students where stud_id = '$id'";
$result = mysql_query($sql) or die(mysql_error());
$count = mysql_num_rows($result);
$row = mysql_fetch_object($result);
$sid = $row->stud_id;
$tid = $row->test_id;
$tid = $row->test_id;
//$attemptquestion = mysql_num_rows($row,$con);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /-->
 <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
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
$('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});	
	
	/*$("input").change(function(){
		//alert('a');
		var discount  = $(this).val();
		$.post("../php/update_invoice_disocunt.php" , {'id':<?php echo $id; ?> , 'discount': discount});
	});*/
	
});
</script>
</head>
<body>
<!--div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div-->
<?php
//$sqln = "SELECT stud_id,test_id FROM score_students UNION SELECT student_id,test_id,total_marks FROM result_students";
//$sql="SELECT stud_id,test_id,question_id FROM score_students WHERE stud_id='$id' UNION SELECT student_id,test_id,total_marks from result_students";

$sql = "select * from result_students where student_id = '$id'";

$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_object($result);
$sid = $row->student_id;
$tid = $row->test_id;
$tm = $row->total_marks;
$at = $row->attempt;
?>
<div class="panel-body">
                
			
<!-- Simple Invoice - START -->

    <div class="row">
        <div class="col-xs-12">
            <div class="text-center"><!--a href='#' id='backinvdisplay'><!--strong>Back</strong></a-->
                <!--i class="fa fa-search-plus pull-left icon"></i-->
                <!--h2>Invoice for purchase #33221</h2-->
				<h3>Result</h3>
            </div>
            <hr>
            <div class="row">
                <!--div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Student Details</div>
                        <div class="panel-body">Student ID:
                            <strong> <?php //echo $sid; ?></strong><br>
                        </div>
                    </div>
                </div-->
                <!--div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Payment Information</div>
                        <div class="panel-body">
                            <strong>Card Name:</strong> Visa<br>
                            <strong>Card Number:</strong> ***** 332<br>
                            <strong>Exp Date:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Order Preferences</div>
                        <div class="panel-body">
                            <strong>Gift:</strong> No<br>
                            <strong>Express Delivery:</strong> Yes<br>
                            <strong>Insurance:</strong> No<br>
                            <strong>Coupon:</strong> No<br>
                        </div>
                    </div>
                </div-->
				<?php
						$sql2 = "select * from students where id = '$sid'";
						$result2 = mysql_query($sql2) or die(mysql_error());
						$value = mysql_fetch_object($result2);
						$name = $value->username;
						$email = $value->email;
						$category = $value->studentcategory;

				?>
                <div class="col-xs-12 col-md-5 col-lg-6 pull-center">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Student Details</div>
                        <div class="panel-body">
						ID: <strong><?php echo $sid; ?></strong><br>
						Name: <?php echo $name; ?><br>
						Category: <?php echo $category; ?>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Test Summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Test ID</strong></td>
									<td><strong>Test Name</strong></td>
                                    <td><strong>Total Question</strong></td>
                                    <td><strong>Wrong</strong></td>
                                    <td><strong>Right</strong></td>
									<td><strong>Total</strong></td>
									<td><strong>Status</strong></td>
                                </tr>
                            </thead>
                            <tbody>
							
                                <tr>
                                    <td><?php echo $tid;  ?></td>
									<td><?php echo $category; ?></td>
                                    <td><?php echo $count; $wrong = $count-$tm; $right = $tm; ?></td>
                                    <td><?php echo $wrong; ?></td>
                                    <td><?php echo $right; ?></td>
									<td><?php echo $tm; ?></td>
									<td><?php if($tm >=20) {?><font color='gree'>Pass</font><?php } ?><font color='red'>Fail</font></td>
                                </tr>
									<tr>
								<td colspan='7' halign='center'>
								<a href="#" class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
	</div>
	</body>
	</html>