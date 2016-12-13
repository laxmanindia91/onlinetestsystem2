<?php
include '../db/connect.php';

$cat = strtoupper($_POST['cat']);
print_r($_POST);
$sql = "insert into category(category_name , isActive) values('$cat' , '1')";
mysql_query($sql) or die(mysql_error());
mysql_close($con);
?>