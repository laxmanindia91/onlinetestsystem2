<?php
include '../db/connect.php';
//print_r($_POST);
$id = $_POST['id'];
$dt = $_POST['dt'];
$tm = $_POST['tm'];

$date_time = $dt . ' ' . $tm;
//echo $date_time . '<br>';
echo $dt . '<br>';
echo $tm;
//die();
$sql = "UPDATE students SET testdate = '$date_time', date1 = '$dt' , time1 = '$tm' where id = '$id' ";
mysql_query($sql) or die(mysql_error());
mysql_close($con);
?>