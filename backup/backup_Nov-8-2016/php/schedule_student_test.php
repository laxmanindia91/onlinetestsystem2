<?php
session_start();
include '../db/connect.php';
//$id = $_GET['id'];
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
	.panel-heading span
{
    margin-top: -26px;
    font-size: 15px;
    margin-right: -12px;
}
	.clickable {
    background: rgba(0, 0, 0, 0.15);
    display: inline-block;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<script>
$(document).ready(function(){
	var arr = [];
	
	  $('.closediv').click(function(){
		// To close the div and empty it
		$("#response_here").empty();
	});
	
	$('.scheduledtest').click(function()
	{	
	//alert('a');
		
		$('input.chkb:checkbox:checked').each(function () {
			arr.push($(this).val());
		});
		var test_cat = $('#testcategory option:selected').val();
		var start_dt = $('#startdate').val();
		var start_tm = $('#starttime').val();
		var end_dt = $('#enddate').val();
		var end_tm = $('#endtime').val();
		//alert(start_dt + start_tm);
			$.ajax({
			type:'POST',
			data: {'testlevel': test_cat , 'testcategory':arr,'startdate':start_dt, 'starttime':start_tm,'enddate':end_dt,'endtime':end_tm},
			url: '../php/schedule_test.php',
			success: function(response)
			{
				//$('$response_here').load('../php/add_schedule.php');
				$("#response_here").empty();
			},
			error: function()
			{
					//$('#response_here').text(response);
			}
		});
	});
	/*if (!Modernizr.inputtypes.date) {
        // If not native HTML5 support, fallback to jQuery datePicker
            $('input[type=date]').datepicker({
                // Consistent format with the HTML5 picker
                    dateFormat : 'yy-mm-dd'
                },
                // Localization
                $.datepicker.regional['it']
            );
        }*/
		
		if ($.browser.mozilla)
    {	alert('mozila');
        if ($('#startdate')[0].type != 'date') $('#startdate').datepicker();
        $(function () {
            $("#startdate").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1900:2015",
                dateFormat: "yy-mm-dd",
                defaultDate: '1900-01-01'
            });
        });
    }
	
	
});
</script>
</head>
<body>

<div class="panel-body">
                
			
<!-- Simple Invoice - START -->

    <div class="row">
        <div class="col-xs-6 col-sm-8 col-md-10 col-lg-12">
           
            
            <div class="row">
                <div class="col-xs-12 col-md-5 col-lg-5 pull-left">
				
                    <div class="panel panel-default height">
					
                        <div class="panel-heading">Test Level1</div>
						<div class="panel-body">
                             <div class="form-group" style="width:100px;">
							  <!--label for="test">Test Level:</label-->
							  <select class="form-control" name="testlevel" id="testcategory">
								<option value="" selected>Select</option>
								<option value="easy">Easy</option>
								<option value="medium">Medium</option>
								<option value="tough">Tough</option>
							  </select>
							  </div>
                        </div>
						</div>
                    <!--/div-->
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
				
                    <div class="panel panel-default height">
					   <div class="panel-heading">Test Category</div>
						<div class="panel-body">
						<form>
						<div class="form-group" style="margin-left:20px;">
						<?php 
							$sql = "select * from category";
							$result = mysql_query($sql) or die(mysql_error());
							while($row = mysql_fetch_object($result))
							{
						?>
                      
							 <!--div class="form-group" style="margin-left:20px;"-->
							<div class="checkbox">
							  <label><input type="checkbox" value="<?php echo strtolower($row->category_name);?>" name="testlevel" class="chkb"><?php echo strtoupper($row->category_name); ?></label>
							</div>
							<?php } ?>
							<!--div class="checkbox">
							  <label><input type="checkbox" value="php" name="testlevel" class="chkb">PHP</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="dotnet" name="testlevel" class="chkb">Dot Net</label>
							</div-->
							</div>
							</form>
						</div>
                    </div>
					
                </div>
				<div class="col-xs-12 col-md-1 col-lg-1">
				<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
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
                                <tr class="info">
                                    <td class="text-center" align="center" colspan="2"><strong>Test Dates</strong></td>
                                    <!--td class="text-center"><strong>Time</strong></td-->
                                </tr>
								<tr>
                                    <td class="text-center"><strong>Start Date with time</strong>
									<div class="form-group">
										<input type="date" name="startdate" id="startdate" value=""/><input type="time" name="starttime" id="starttime" value=""/><span class="glyphicon glyphicon-calendar pull-center"></span>
										
										</div></td>
										<td class="text-center"><strong>End Date with time</strong> <div class="form-group">
										<input type="date" name="enddate" id="enddate" value=""/><input type="time" name="endtime" id="endtime" value=""/><span class="glyphicon glyphicon-calendar pull-center"></span>
										</div></td>
                                    <!--td class="text-center"><strong>Test Time</strong></td-->
                                </tr>
                            </thead>
                            <tbody>
							
                                <tr>
                                    
                                    <td colspan="2" align="center"><b>Note: </b>This test will be apply to all student according to categorywise.</td>
                                                                     
                                </tr>

								<tr>
								<td colspan='2' align='center'>
								
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