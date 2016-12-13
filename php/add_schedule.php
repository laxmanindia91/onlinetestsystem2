<?php
  include '../db/connect.php';


   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				//$('#tbl').DataTable({aLengthMenu: [[25, 50, 100, 200, -1],[25, 50, 100, 200, "All"]],paging: true});
				
				$("#tbl").on('click', '.schedule', function () {
		
				var id = $(this).closest('tr').find('#sid').val();
					//var id = $(this).closest('#sid').val();
					//alert(id);
					var url_to_load = "../php/schedule_time.php?id="+id;
					//alert(url_to_load);
					$('#response_here').load(url_to_load);
				});
			});
</script>
</head>
<body>
<div class='container'>
   <div class="col-sm-8">
      <h3>Student List</h3>
   <table id="tbl" class="table table-striped">
      <thead>
        <th>Name</th><th>Action</th></thead>
<?php   
   $sql = 'SELECT * FROM students';
   
   $retval = mysql_query( $sql, $con );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	   ?>
	<tr>
	<td><input type="hidden" id="sid" value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></td><td align="right"><button type="button" class="btn btn-info schedule">schedule</button></td>
	</tr>
       <?php
   }
   mysql_close($con);
?>
</table>
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
