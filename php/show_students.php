<?php
include '../db/connect.php';
?>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script-->
  <script>
  $(document).ready(function(){
	  /*$('#tbl').DataTable({aLengthMenu: [[25, 50, 100, 200, -1],[25, 50, 100, 200, "All"]],paging: true,"bPaginate": true,
"bInfo": true,
"bFilter": false,
"bLengthChange": false});*/
$("#tbl").on('click', '.btnDeleteStudent', function () {
		
		var id = $(this).closest('tr').find('#id1').val();
	  	alert(id);
		$.post("../php/delete_student.php",{'id':id},function(){
		$('#tbl').load('../php/show_students.php');
		});
	  });
  });
  </script>
</head>
<body>

<div class="container">

  <div class="row">
  <div class="col-md-7">
 
  <?php
  $sql = "select * from students";
  $result = mysql_query($sql) or die(mysql_error());
   
  ?>
  <table class="table table-striped" id="tbl">
    <thead>
      <tr>
        <th></th>
        <th>Student Name</th>
        <th>Email</th>
         <th>City</th>
		<th>Phone</th>
		<th>Category</th>
		<th>Action</th>        
      </tr>
    </thead>
    <tbody>
  
<?php
while($row = mysql_fetch_object($result))
  {
?>  <tr>
        <td><input type="hidden" id="id1" value="<?php echo $row->id; ?>"></td>
        <td><?php echo $row->fullname; ?></td>
		<td><?php echo $row->username; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo ucwords($row->stud_city); ?></td>
        <td><?php echo $row->stud_phone; ?></td>
		<td><?php echo ucwords($row->studentcategory); ?></td>
		<td id="<?php echo $row->id; ?>"><button class='btnDeleteStudent'>Delete</button><?php echo $row->id; ?></td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
 
  </div>
 
  </div>
  
  <script type="text/javascript">
	// For demo to fit into DataTables site builder...
	//$('#tbl')
		//.removeClass( 'display' )
		//.addClass('table table-striped table-bordered');
</script>
</div>

</body>
</html>

