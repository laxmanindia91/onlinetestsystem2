<?php
include '../db/connect.php';
$id = $_POST['id'];
$sql = "delete from students where id = '$id'";
mysql_query($sql) or die(mysql_error());
mysql_close($con);
?>