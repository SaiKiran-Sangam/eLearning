<?php
require_once("connections.php");
function register()
{
	 $v1 = $_POST['a'];
     $v2 = $_POST['b'];
	 $v3 = $_POST['c'];
     $v4 = $_POST['d'];
	  $str="C:\xampp\htdocs\proj".$v4;
	 echo $str;
	$sql="insert into attched(sid,sname,stype,file1) values ('$v1','$v2','$v3','$str')";
	
   $query = mysql_query($sql);
   echo "\n u have uploaded sucessfully";
   //include("branch29.html");
}

if(isset($_POST['s']))
{
	register();
}
?>