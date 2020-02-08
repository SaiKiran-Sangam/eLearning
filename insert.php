<?php
require_once("connections.php");

function register()
{
		if(empty($_POST['a'])&&empty($_POST['b'])&&empty($_POST['c'])&&empty($_POST['d']))
    {
       echo "All fields are required";
	 }
	 else
	 {
	 $v1 = $_POST['a'];
     $v2 = $_POST['b'];
	 $v3 = $_POST['c'];
     $v4 = $_POST['d'];
	
    $query = mysql_query("insert into project(fname,lname,email,pass) values ('$v1','$v2','$v3','$v4')");
   include("branch.html");
}
}

if(isset($_POST['s']))
{
	register();
}
?>