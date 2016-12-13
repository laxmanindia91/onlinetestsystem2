<?php
//session_start();
//$id = $_SESSION['id'];
include '../db/connect.php';
//$sid = $_REQUEST['sid'];
$testid = $_REQUEST['testid'];
$quest = $_POST['question'];
$cat = $_POST['category'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$ans = strtoupper($_POST['ans']);
$level = $_POST['level'];
//print_r($_POST);

$query1 = "INSERT INTO questions(question , category_id,level,isACtive) VALUES ('$quest','$cat','$level','1')";
//$query = "INSERT INTO questions VALUES (NULL,$quest,'2')";
$result = mysql_query($query1) or die(mysql_error());

//get id of question that submitted
$question_id = mysql_insert_id();


$query2 = "INSERT INTO question_choices (question_id , is_Correct_Choice , choice1, choice2, choice3, choice4) VALUES ('$question_id', '$ans', '$opt1', '$opt2', '$opt3', '$opt4')";
//$sql2 = "INSERT INTO question_choices VALUES (NULL,$question_id, $ans, $opt1, $opt2, $opt3, $opt4)";
$result = mysql_query($query2) or die(mysql_error());
mysql_close();
?>