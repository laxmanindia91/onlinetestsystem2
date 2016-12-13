<?php
include '../db/connect.php';

$quest = $_POST['question'];
$cat = $_POST['category'];
$choice_values = $_POST['choice_name'];
$no_of_choice = count($choice_values);
//echo $no_of_choice;
//print_r(array_chunk($choice_values,$no_of_choice));

$ans = strtoupper($_POST['answer']);
$level = $_POST['level'];
//print_r($_POST);

//die();
$query1 = "INSERT INTO questions(question,category_id,level,isACtive) VALUES ('$quest','$cat','$level','1')";
$result = mysql_query($query1) or die(mysql_error());

//get id of question that submitted
$question_id = mysql_insert_id();

if($no_of_choice == 1)
{
	$query2 = "INSERT INTO question_choices (question_id , is_Correct_Choice, choice1) VALUES ('$question_id', '$ans','$choice_values[0]')";
}
else if($no_of_choice == 2)
{
		$query2 = "INSERT INTO question_choices (question_id , is_Correct_Choice,choice1,choice2) VALUES ('$question_id', '$ans','$choice_values[0]','$choice_values[1]')";
}
else if($no_of_choice == 3)
{
	$query2 = "INSERT INTO question_choices (question_id , is_Correct_Choice,choice1,choice2,choice3) VALUES ('$question_id', '$ans','$choice_values[0]','$choice_values[1]','$choice_values[2]')";
}
else if($no_of_choice == 4)
{
		$query2 = "INSERT INTO question_choices (question_id , is_Correct_Choice,choice1,choice2,choice3,choice4) VALUES ('$question_id', '$ans','$choice_values[0]','$choice_values[1]','$choice_values[2]','$choice_values[3]')";
}
else if($no_of_choice == 5)
{
		$query2 = "INSERT INTO question_choices (question_id , is_Correct_Choice,choice1,choice2,choice3,choice4,choice5) VALUES ('$question_id', '$ans','$choice_values[0]','$choice_values[1]','$choice_values[2]','$choice_values[3]','$choice_values[4]')";
}

else
{
	//die();
	return;
}
mysql_query($query2) or die(mysql_error());
mysql_close();
?>