<?php
include '../db/connect.php';
$sid = $_REQUEST['sid'];
print_r($_POST);
//$sql = "update students set attendTest = '1',test_id='$tstid' where id = '$sid'";
$sql = "update students set attendTest = '1' where id = '$sid'";
mysql_query($sql) or die(mysql_error());
mysql_close($con);
?>