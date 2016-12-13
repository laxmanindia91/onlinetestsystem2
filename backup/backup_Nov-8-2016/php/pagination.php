<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#tbl').DataTable();
			} );
</script>
</head>
<body>
<div class='container'>
   <div class="col-sm-8">
      <h3>Pagination</h3>
   <table id='tbl' class='table table-striped'>
      <thead>
        <th>Name</th></thead>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM customerorders';
   mysql_select_db('oqsnew_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
echo "<tr><td>" . $row['name'] ."</td></tr>";
       
   }
   
   
   
   mysql_close($conn);
?>
</table>
</div>
<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#tbl')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>
</div></body>
</html>
