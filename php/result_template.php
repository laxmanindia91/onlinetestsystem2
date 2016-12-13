<?php
session_start();
include '../db/connect.php';
$id = $_SESSION['id'];
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
<div class="affix-btn">
                    <button name="submit" type="submit" value="Save" class="btn pull-right closediv" data-offset-top="0">Close</button>
                </div>
<?php
/*foreach ($ids as $value) {
    //echo "Key: $key; Value: $value\n";
	//echo $value;
	$tmp[]=$value;

}
//print_r($tmp);
$tmpjoin = implode(",",$tmp);*/

//$sql = "SELECT customerorders.orderids, customer_cart_items.customer_cart, FROM   customerorders , customer_cart_items WHERE  id = $id && cust_id=cust_id";
$sql = "select * from result_students where student_id = '$id'";

$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_object($result);
$sid = $row->student_id;
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
        <div class="col-md-12">
            <div class="panel panel-default">
                        <div class="panel-heading panel-heading-custom">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Result
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Descriptions</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Attempted Question</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Un-Attempted Question</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Total Correct Answer</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Total Wrong Answer</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Result</td>
                                            <td>Fail</td>
                                        </tr>
                                        <tr>
                                            <td>Performance</td>
                                            <td>Bad</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-5">
                                <div id="chart" class="c3" style="max-height: 320px; position: relative;"><svg width="442.5" height="320" style="overflow: hidden;"><defs><clipPath id="c3-1478167432765-clip"><rect width="442.5" height="296"></rect></clipPath><clipPath id="c3-1478167432765-clip-xaxis"><rect x="-31" y="-20" width="504.5" height="40"></rect></clipPath><clipPath id="c3-1478167432765-clip-yaxis"><rect x="-29" y="-4" width="20" height="320"></rect></clipPath><clipPath id="c3-1478167432765-clip-grid"><rect width="442.5" height="296"></rect></clipPath><clipPath id="c3-1478167432765-clip-subchart"><rect width="442.5"></rect></clipPath></defs><g transform="translate(0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="221.25" y="148" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="442.5" height="296" style="opacity: 0;"></rect><g clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip)" class="c3-regions" style="visibility: hidden;"></g><g clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip-grid)" class="c3-grid" style="visibility: hidden;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="296" style="visibility: hidden;"></line></g></g><g clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="0.75" y="0" width="442.5" height="296"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Correct" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Correct c3-bars c3-bars-Correct" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Wrong" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Wrong c3-bars c3-bars-Wrong" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Correct" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Correct c3-lines c3-lines-Correct"></g><g class=" c3-shapes c3-shapes-Correct c3-areas c3-areas-Correct"></g><g class=" c3-selected-circles c3-selected-circles-Correct"></g><g class=" c3-shapes c3-shapes-Correct c3-circles c3-circles-Correct" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Wrong" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Wrong c3-lines c3-lines-Wrong"></g><g class=" c3-shapes c3-shapes-Wrong c3-areas c3-areas-Wrong"></g><g class=" c3-selected-circles c3-selected-circles-Wrong"></g><g class=" c3-shapes c3-shapes-Wrong c3-circles c3-circles-Wrong" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(221.25,143)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text><g class="c3-chart-arc c3-target c3-target-Correct"><g class=" c3-shapes c3-shapes-Correct c3-arcs c3-arcs-Correct"><path class=" c3-shape c3-shape c3-arc c3-arc-Correct" transform="" d="M9.570379816663682e-14,-135.85A135.85,135.85 0 0,1 9.570379816663682e-14,-135.85L0,0Z" style="fill: rgb(0, 228, 0); cursor: pointer; opacity: 1;"></path></g><text dy=".35em" class="" transform="translate(7.656303853330945e-14,-108.68)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Wrong"><g class=" c3-shapes c3-shapes-Wrong c3-arcs c3-arcs-Wrong"><path class=" c3-shape c3-shape c3-arc c3-arc-Wrong" transform="" d="M0,135.85A135.85,135.85 0 1,1 0,-135.85A135.85,135.85 0 1,1 0,135.85Z" style="fill: rgb(0, 100, 201); cursor: pointer; opacity: 1;"></path></g><text dy=".35em" class="" transform="translate(-4.1608884619938085e-14,108.68)" style="opacity: 1; text-anchor: middle; pointer-events: none;">100.0%</text></g></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Correct" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Correct"></g></g><g class="c3-chart-text c3-target c3-target-Wrong" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Wrong"></g></g></g></g><g clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip-xaxis)" transform="translate(0,296)" style="visibility: visible; opacity: 0;"><text class="c3-axis-x-label" transform="" x="442.5" dx="-0.5em" dy="-0.5em" style="text-anchor: end;">Sepal.Width</text><g class="tick" transform="translate(222, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H442.5V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;"><text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;">Petal.Width</text><g class="tick" transform="translate(0,296)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">-10</tspan></text></g><g class="tick" transform="translate(0,272)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,247)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,223)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,198)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,174)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,149)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><g class="tick" transform="translate(0,124)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">60</tspan></text></g><g class="tick" transform="translate(0,100)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">70</tspan></text></g><g class="tick" transform="translate(0,75)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">80</tspan></text></g><g class="tick" transform="translate(0,51)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">90</tspan></text></g><g class="tick" transform="translate(0,26)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">100</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">110</tspan></text></g><path class="domain" d="M-6,1H0V296H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(442.5,0)" style="visibility: hidden; opacity: 0;"><text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,296)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,267)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,237)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,208)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,178)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,149)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,119)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,90)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,60)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,31)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V296H6"></path></g></g><g transform="translate(0.5,320.5)" style="visibility: hidden;"><g clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="442.5" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://www.pskills.org/randomtestaction.jsp#c3-1478167432765-clip-xaxis)" style="opacity: 0;"><g class="tick" transform="translate(222, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H442.5V6"></path></g></g><g transform="translate(0,300)"><g class=" c3-legend-item c3-legend-item-Correct" style="visibility: visible; cursor: pointer; opacity: 1;"><text x="176.359375" y="9" style="pointer-events: none;">Correct</text><rect class="c3-legend-item-event" x="162.359375" y="-5" width="66" height="18" style="fill-opacity: 0;"></rect><rect class="c3-legend-item-tile" x="162.359375" y="0" width="10" height="10" style="pointer-events: none; fill: rgb(0, 228, 0);"></rect></g><g class="c3-legend-item c3-legend-item-Wrong" style="visibility: visible; cursor: pointer;"><text x="242.359375" y="9" style="pointer-events: none;">Wrong</text><rect class="c3-legend-item-event" x="228.359375" y="-5" width="51.78125" height="18" style="fill-opacity: 0;"></rect><rect class="c3-legend-item-tile" x="228.359375" y="0" width="10" height="10" style="pointer-events: none; fill: rgb(0, 100, 201);"></rect></g></g></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 200.484px; left: 103.297px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name-Wrong"><td class="name"><span style="background-color:#0064C9"></span>Wrong</td><td class="value">100.0%</td></tr></tbody></table></div></div>
                            </div>
                            
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                
                                
                                <div class="panel panel-default" id="ques1">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 1 :</b> Which of the following is not true? </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> PHP can not be embedded into html.</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques2">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 2 :</b> <span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">In
PHP the error control operator is _______ ?</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> @</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques3">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 3 :</b> what will be the output of below code ?<div><div>&lt;?php&nbsp;</div><div>$test="3.5seconds";&nbsp;</div><div>settype($test,"double");&nbsp;</div><div>settype($test,"integer");&nbsp;</div><div>settype($test,"string");&nbsp;</div><div>print($test);&nbsp;</div><div>?&gt;</div></div> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> 3</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques4">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 4 :</b> <span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Which
of following are compound data type?</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> Both</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques5">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 5 :</b> <span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Trace
the odd data type?</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> integer</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques6">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 6 :</b> <div><span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA"><div>&lt;?php</div><div>&nbsp;$x="display";&nbsp;</div><div>&nbsp;${$x.'_result'} ();&nbsp;</div><div>&nbsp;? &gt;</div></span></div><span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Above
program will call the function display_result()</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> True</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques7">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 7 :</b> <div>What is the out put</div><div>&lt;?php&nbsp;</div><div>$color=array("red","yellow","white");&nbsp;</div><div>$x=in_array("black",$color);&nbsp;</div><div>if($x==0)&nbsp;</div><div>echo "good bye";&nbsp;</div><div>if($x==1) echo "Hello";&nbsp;</div><div>?&gt;</div> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> good bye</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques8">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 8 :</b> <span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Assume
that your php file 'index.php' in location c:/apache/htdocs/phptutor/index.php.
If you used basename($_SERVER['PHP_SELF']) function in your page, then what is
the return value of this function ?</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> index.php</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques9">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 9 :</b> Which of the following function returns the number of characters in a string variable? </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> strlen($variable)</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques10">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 10 :</b> Which datatypes are treaded as arrays </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> String</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques11">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 11 :</b> <div>What function used to print statement in PHP?</div> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> echo();</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques12">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 12 :</b> <span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Father
of PHP?</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> Rasmus Lerdorf</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques13">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 13 :</b> <span style="font-size:11.0pt;line-height:115%;
font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Is
it possible to submit a form with out a submit button?</span> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> Yes</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques14">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 14 :</b> Which of following are compound data type? </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> Both</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques15">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 15 :</b> <div>All variables in PHP start with which symbol?</div> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> $</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques16">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 16 :</b> You can define a constant by using the define() function. Once a constant is defined </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> It can never be changed or undefined</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques17">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 17 :</b> The left association operator % is used in PHP for </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> modulus</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques18">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 18 :</b> script is a ______. </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> Program or sequence of instruction that is interpreted or carried out by another program</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques19">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 19 :</b> In mail($param1, $param2, $param3, $param4), the $param2 contains </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> The subject</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel panel-default" id="ques20">
                                    <div class="panel-heading online-test" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a><b>Ques 20 :</b> <font face="Calibri, sans-serif"><span style="font-size: 11pt; line-height: 115%;">Which
of the&nbsp;</span><span style="font-size: 15px; line-height: 17px;">following</span><span style="font-size: 11pt; line-height: 115%;">&nbsp;are valid float values?</span></font> </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body online-test-options">
                                            
                                            <div class="col-md-12">
                                                <span class="test-answer">Answer :</span><span class=""> All of above</span>
                                            </div>
                                            <div class="col-md-12 discriptions" style="display: none;">
                                                <span class="test-desc-head">Description :</span><span class="test-desc-data">  </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary online-test-btn">Save Your Result</button>
                            </div>
                            <div><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- pskillsorg-add-link-responsive -->
<ins class="adsbygoogle" style="display: block; height: 90px;" data-ad-client="ca-pub-9143461017726366" data-ad-slot="8145421331" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:1134px;background-color:transparent"><ins id="aswift_2_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:1134px;background-color:transparent"><iframe width="1134" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><div class="col-md-12" style="padding:15px;">
    
</div></div>
                        </div>
                    </div>
        </div>
    </div>




<!-- Simple Invoice - END -->
</div>
</body>
</html>