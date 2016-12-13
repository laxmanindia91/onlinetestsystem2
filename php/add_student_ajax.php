<?php
include '../db/connect.php';
$fullname = $_POST['fullname'];
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$stype = $_POST['studtype'];
$cat = $_POST['category'];
$city = $_POST['city'];
$phone = $_POST['phone'];

//print_r($_POST);
$sql = "insert into students (fullname,username,password,email,login_type,studentcategory,stud_city,stud_phone) values('$fullname','$user','$pass','$email','$stype','$cat','$city','$phone')";
mysql_query($sql) or die(mysql_error());
mysql_close($con);
?>