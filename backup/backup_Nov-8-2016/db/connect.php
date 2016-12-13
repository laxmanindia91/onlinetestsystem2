<?php
$con = mysql_connect('localhost' , 'root' , '') or die(mysql_error());
//$con = mysql_connect('localhost','root','', true, 65536 /* here! */);	// or die("cannot connect");	// Pass 65536 to mysql_connect as 5th parameter to execute multiple query at once in php with mysql otherwise uncomment first
$db = mysql_select_db('ots_db');
if(!$con ) {
      die('Could not connect: ' . mysql_error());
   }
?>