<?php
include '../db/connect.php';
$qid = $_POST['id'];
$qdata = $_POST['qdata'];

$sql = "update questions set question = '$qdata' where id = '$qid'";
mysql_query($sql) or die(mysql_error());
mysql_close($con);
?>