<?php
include '../db/connect.php';

$level = $_POST['testlevel'];
$category = $_POST['testcategory'];
$sdate = $_POST['startdate'];
$stime = $_POST['starttime'];
$edate = $_POST['enddate'];
$etime = $_POST['endtime'];
//echo $level;
//print_r($_POST);
foreach ($category as $value) {
    //echo "Key: $key; Value: $value\n";
	//echo $value;
	$tmp[]=$value;
	//echo $tmp . ' ';
	//echo $value;
	$test_cat = $value;
	$sql = "insert into test_students (testlevel , testcategory,startdate,starttime,enddate,endtime) values('$level','$test_cat','$sdate','$stime','$edate','$etime')";
	mysql_query($sql) or die(mysql_error());


}
//print_r($tmp);
$tmpjoin = implode(",",$tmp);
//print_r($tmpjoin);
//die();
//$sql = "select * from students";
//$result = mysql_query($sql) or die(mysql_error());

//$row = mysql_fetch_object($result);
//$orderids = $row->orderids;
//$tmpjoin = explode(",",$orderids);
//$dt = $row->date1;
//$tm = $row->time1;
//$ischange = $row->isChange;

//print_r($tmpjoin);
//echo '<br>size ' . $arrlen = count($tmpjoin);
/*foreach ($tmpjoin as $value) {
    //echo "Key: $key; Value: $value\n";
	echo'<br>'. $value;
}*/

/*$sql = "insert into test_students (testlevel , testcategory,startdate,starttime,enddate,endtime) values('$level','$tmpjoin','$sdate','$stime','$edate','$etime')";
$result = mysql_query($sql) or die(mysql_error());*/
mysql_close($con);
?>