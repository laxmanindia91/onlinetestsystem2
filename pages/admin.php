<?php
session_start();
//var_dump($_SESSION);
$user = $_SESSION['username'];
if($user == '')
{
	header('Location: ../index.php');
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function()
  {
	 $('#manageopt li').click(function(){
		 var cat =  $(this).attr("id");
		 //alert(cat);
		$.ajax({
        type: "GET",
        url: '../php/' + cat + '.php',
        data: {},
        success: function (response) {
            $('#response_here').html(response);
            },
        error: function () {
            $('#response_here').html('There was an error!');
        }
    });
		 
	 }); 
	 
	 $('#schedule_student_test').click(function(){
		$('#response_here').load('../php/schedule_student_test.php'); 
	 });
	 $('#add_content').click(function(){
		 $('#response_here').load('../php/add_question_new.php');
	 });
	 $('#add_student').click(function(){
		 $('#response_here').load('../php/add_student.php');
	 });
	 
	 
  });
  
  </script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
             <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <!--span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span-->
          </button>
          <a class="navbar-brand text-center" href="#">Online Test System</a>
        </div>
            <!-- /.navbar-header -->
			<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li-->
            <li class="dropdown" id="showopt1">
               
			   <a href="..pages/admin.php" class="dropdown-toggle" data-toggle="dropdown">Home</a>
					<!--ul class="dropdown-menu dropdown-user" id="order">
                        <li id="new_order"><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> New Order</a>
                        </li>
                    </ul-->
            <!--/ul-->
            </li>
			<li class="dropdown" id="showopt2">
               
			   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage<span class="caret"></span></a>
			   
			 
                    <ul class="dropdown-menu dropdown-user" id="manageopt">
                        
                        <li id="add_student"><a href="#"><i class="glyphicon glyphicon-user"></i> Student</a>
                        </li>
						<li id="schedule_student_test"><a href="#"><i class="glyphicon glyphicon-th-list"></i> Schedule</a>
                        </li>
						<li id="show_question_list"><a href="#"><i class="glyphicon glyphicon-list-alt"></i> View Questions</a>
                        </li>

						
                    </ul>
					</li>
					<li class="dropdown" id="showopt2">
               
			   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content<span class="caret"></span></a>
			   <ul class="dropdown-menu dropdown-user" id="manageopt3">
                        <li id="add_content"><a href="#"><i class="glyphicon glyphicon-plus"></i> Question</a>
                        </li>
						</ul>
			   </li>
          </ul>
		  <ul class="nav navbar-nav dropdown-user pull-right">
		 
		  <?php //echo 'Welcome '; //$_SESSION['myusername'] . ' ';?>
            <li class="dropdown">
                <a href="" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                <ul class="dropdown-menu pull-right" id="setting2">
				<li id="show_setting"><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
				<li id='add_student'><a href="#"><i class="glyphicon glyphicon-user"></i> Add Member</a></li>
				<li><a href="../php/Logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
        </div>
        </nav>
  
<div class="container">
 <div class="row">
	<div class="col-sm-4 col-md-8 col-lg-12"><div id="response_here"></div></div>
  </div>
</div>

</body>
</html>
