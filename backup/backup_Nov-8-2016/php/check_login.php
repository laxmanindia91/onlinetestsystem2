<?php
session_start();
include '../db/connect.php';

$user = $_POST['username'];
$pass = $_POST['password'];

//print_r($_POST);
//$_SESSION['myuser']=$usr; 
/*echo $usr;
echo $pass;
die();*/

$query = "SELECT username, password 
    FROM members 
    WHERE username='$user' AND password='$pass' 
    UNION 
    SELECT username, password 
    FROM students 
    WHERE username='$user' AND password='$pass' ";
//$sql = "select * from members where username = '$user' AND password = '$pass'";
$result = mysql_query($query) or die(mysql_error());
//$result = mysql_query($sql) or die(mysql_error());

$count = mysql_num_rows($result);
if($count == 1)
{
	$sql2="SELECT id ,username , login_type FROM members WHERE username='$user' and password='$pass' UNION SELECT id,username,login_type from students where username = '$user' and password = '$pass'";
	$result2 = mysql_query($sql2);
	$row = mysql_fetch_array($result2);
	
	$id = $row['id'];
	$username = $row['username'];
	$login_type = $row['login_type'];
	//$scat = $row['studentcategory'];
	$_SESSION['id'] = $id;
	$_SESSION['username'] = $username;
	$_SESSION['log_type'] = $login_type;
	//$_SESSION['scategory'] = $scat;
	
	//header('Location: ../pages/index.php');
	
	if($login_type == 'admin')
	{
		header('Location: ../pages/admin.php');
	}
	else if($login_type == 'content')
	{
		header('Location: ../pages/content.php');
	}
	else if($login_type =='student')
	{
		header('Location: ../pages/student.php');
	}
	 
}
else
{	
	header('Location: ../index.php');
}





//die();
?>