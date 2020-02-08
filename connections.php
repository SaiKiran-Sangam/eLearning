<?php
$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('project',$con) or die("Failed to connect to MySQL: " . mysql_error());
?>