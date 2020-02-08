<?php
require_once("connections.php");
//$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
//$db=mysql_select_db('project',$con) or die("Failed to connect to MySQL: " . mysql_error());
function register()
{
		if(empty($_POST['a'])&&empty($_POST['b'])&&empty($_POST['c'])&&empty($_POST['d'])&&empty($_POST['e'])&&empty($_POST['f']))
    {
       echo "All fields are required";
	 }
	 else
	 {
	 $v1 = $_POST['a'];
     $v2 = $_POST['b'];
	 $v3 = $_POST['c'];
     $v4 = $_POST['d'];
	 $v5 = $_POST['e'];
	 $v6 = $_POST['f'];
	$sql="insert into admin(fname,lname,email,desg,facid,pass) values ('$v1','$v2','$v3','$v4','$v5','$v6')";
	
   $query = mysql_query($sql);
   include("branch29.html");
}
}

if(isset($_POST['s']))
{
	register();
}
?>