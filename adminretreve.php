<?php
require_once("connections.php");

function register()
{
	 $v1 = $_POST['user'];
     $v2 = $_POST['pass'];
	 $s="select * from  admin where email='$_POST[user]' and pass='$_POST[pass]'";
	 $query = mysql_query($s); 
	$row = mysql_fetch_array($query) ;

	if(($v1==$row['email']) && ($v2==$row['pass']))
	{
		include("branch29.html");
	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}

if(isset($_POST['s']))
{
	register();
}
?>